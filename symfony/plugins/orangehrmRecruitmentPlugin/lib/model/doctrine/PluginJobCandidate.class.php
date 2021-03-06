<?php

/**
 * PluginJobCandidate
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class PluginJobCandidate extends BaseJobCandidate
{
    const NO_STATUS = "NO STATUS DETECTED";

    public function getCurrentStatus()
    {
        $jobCandidateVacancy = $this->getJobCandidateVacancy()->getFirst();
        if ($jobCandidateVacancy instanceof JobCandidateVacancy) {
            return $jobCandidateVacancy->getStatus();
        } else {
            return self::NO_STATUS;
        }
    }
}
