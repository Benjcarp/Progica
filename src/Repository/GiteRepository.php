<?php

namespace App\Repository;

use App\Entity\Gite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Gite>
 *
 * @method Gite|null find($id, $lockMode = null, $lockVersion = null)
 * @method Gite|null findOneBy(array $criteria, array $orderBy = null)
 * @method Gite[]    findAll()
 * @method Gite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Gite::class);
    }

    public function save(Gite $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Gite $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

   public function findByCriteria($criteres)
   {
        
        $query = $this->createQueryBuilder('g');

        if($criteres['villes'] != null) {
            $id = $criteres['villes']->getId();
            $query = $query
            ->orWhere('g.ville = :id')
            ->setParameter('id', $id);
        }
        
        if($criteres['departements'] != null) {
            $id = $criteres['departements']->getId();
            $query = $query
            ->leftJoin('g.ville', 'v')
            ->orWhere('v.departement = :id')
            ->setParameter('id', $id);
        }

        if($criteres['regions'] != null) {
            $id = $criteres['regions']->getId();

            if($criteres['departements'] != null) {
                $query = $query
                ->leftJoin('v.departement', 'd')
                ->orWhere('d.region = :id')
                ->setParameter('id', $id);

            } else {
                $query = $query
                ->leftJoin('g.ville', 'vi')
                ->leftJoin('vi.departement', 'd')
                ->orWhere('d.region = :id')
                ->setParameter('id', $id);
            }

        }

        if($criteres['equipementExterieurs'] != null) {
            $ids = [];
            $equipementExterieurs = $criteres['equipementExterieurs'];
            foreach ($equipementExterieurs as $equipementExterieur) {
               $id = $equipementExterieur->getId();
                array_push($ids, $id);
            }

            $query = $query
            ->leftJoin('g.equipement_exterieur', 'ex')
            ->orWhere('ex.id IN (:idEx)')
            ->setParameter('idEx', $ids);
        }

        if($criteres['equipementInterieurs'] != null) {
            $ids = [];
            foreach ($criteres['equipementInterieurs'] as $equipementInterieur) {
               $id = $equipementInterieur->getId();
                array_push($ids, $id);
            }

            $query = $query
            ->leftJoin('g.equipement_interieur', 'ie')
            ->orWhere('ie.id IN (:idIn)')
            ->setParameter('idIn', $ids);
        }



        return $query->getQuery()->getResult();

   }

//    public function findOneBySomeField($value): ?Gite
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
