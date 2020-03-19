<?php
/*
 * Pipedrive
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace Pipedrive\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class Stage implements JsonSerializable
{
    /**
     * Name of the stage
     * @var string|null $name public property
     */
    public $name;

    /**
     * ID of the pipeline to add stage to.
     * @maps pipeline_id
     * @var integer|null $pipelineId public property
     */
    public $pipelineId;

    /**
     * Deal success probability percentage. Used/shown when deal weighted values are used
     * @maps deal_probability
     * @var integer|null $dealProbability public property
     */
    public $dealProbability;

    /**
     * Whether deals in this stage can become rotten.
     * @maps rotten_flag
     * @var int|null $rottenFlag public property
     */
    public $rottenFlag;

    /**
     * Number of days the deals not updated in this stage would become rotten. Applies only if rotten_flag
     * is set.
     * @maps rotten_days
     * @var integer|null $rottenDays public property
     */
    public $rottenDays;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $name            Initialization value for $this->name
     * @param integer $pipelineId      Initialization value for $this->pipelineId
     * @param integer $dealProbability Initialization value for $this->dealProbability
     * @param int     $rottenFlag      Initialization value for $this->rottenFlag
     * @param integer $rottenDays      Initialization value for $this->rottenDays
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->name            = func_get_arg(0);
            $this->pipelineId      = func_get_arg(1);
            $this->dealProbability = func_get_arg(2);
            $this->rottenFlag      = func_get_arg(3);
            $this->rottenDays      = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['name']             = $this->name;
        $json['pipeline_id']      = $this->pipelineId;
        $json['deal_probability'] = $this->dealProbability;
        $json['rotten_flag']      = $this->rottenFlag;
        $json['rotten_days']      = $this->rottenDays;

        return $json;
    }
}