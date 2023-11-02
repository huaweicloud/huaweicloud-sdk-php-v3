<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class BizTypeEnum
{
    /**
     * Possible values of this enum
     */
    const ATOMIC_INDEX = 'ATOMIC_INDEX';
    const DERIVATIVE_INDEX = 'DERIVATIVE_INDEX';
    const DIMENSION = 'DIMENSION';
    const DIMENSION_ATTRIBUTE = 'DIMENSION_ATTRIBUTE';
    const DIMENSION_HIERARCHIES = 'DIMENSION_HIERARCHIES';
    const CONDITION_GROUP = 'CONDITION_GROUP';
    const TIME_CONDITION = 'TIME_CONDITION';
    const COMMON_CONDITION = 'COMMON_CONDITION';
    const FACT_LOGIC_TABLE = 'FACT_LOGIC_TABLE';
    const TABLE_MODEL = 'TABLE_MODEL';
    const DIMENSION_LOGIC_TABLE = 'DIMENSION_LOGIC_TABLE';
    const STANDARD_ELEMENT = 'STANDARD_ELEMENT';
    const AGGREGATION_LOGIC_TABLE = 'AGGREGATION_LOGIC_TABLE';
    const TAG = 'TAG';
    const CODE_TABLE = 'CODE_TABLE';
    const TABLE_MODEL_ATTRIBUTE = 'TABLE_MODEL_ATTRIBUTE';
    const FACT_DIMENSION = 'FACT_DIMENSION';
    const FACT_ATTRIBUTE = 'FACT_ATTRIBUTE';
    const FACT_MEASURE = 'FACT_MEASURE';
    const SUMMARY_DIMENSION_ATTRIBUTE = 'SUMMARY_DIMENSION_ATTRIBUTE';
    const SUMMARY_TIME = 'SUMMARY_TIME';
    const DIMENSION_TABLE_ATTRIBUTE = 'DIMENSION_TABLE_ATTRIBUTE';
    const QUALITY_RULE = 'QUALITY_RULE';
    const BIZ_METRIC = 'BIZ_METRIC';
    const COMPOUND_METRIC = 'COMPOUND_METRIC';
    const INFO_ARCH = 'INFO_ARCH';
    const DEGENERATE_DIMENSION = 'DEGENERATE_DIMENSION';
    const TABLE_MODEL_LOGIC = 'TABLE_MODEL_LOGIC';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ATOMIC_INDEX,
            self::DERIVATIVE_INDEX,
            self::DIMENSION,
            self::DIMENSION_ATTRIBUTE,
            self::DIMENSION_HIERARCHIES,
            self::CONDITION_GROUP,
            self::TIME_CONDITION,
            self::COMMON_CONDITION,
            self::FACT_LOGIC_TABLE,
            self::TABLE_MODEL,
            self::DIMENSION_LOGIC_TABLE,
            self::STANDARD_ELEMENT,
            self::AGGREGATION_LOGIC_TABLE,
            self::TAG,
            self::CODE_TABLE,
            self::TABLE_MODEL_ATTRIBUTE,
            self::FACT_DIMENSION,
            self::FACT_ATTRIBUTE,
            self::FACT_MEASURE,
            self::SUMMARY_DIMENSION_ATTRIBUTE,
            self::SUMMARY_TIME,
            self::DIMENSION_TABLE_ATTRIBUTE,
            self::QUALITY_RULE,
            self::BIZ_METRIC,
            self::COMPOUND_METRIC,
            self::INFO_ARCH,
            self::DEGENERATE_DIMENSION,
            self::TABLE_MODEL_LOGIC,
        ];
    }
}

