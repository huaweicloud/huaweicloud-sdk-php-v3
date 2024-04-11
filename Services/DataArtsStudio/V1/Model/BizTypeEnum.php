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
    const AGGREGATION_LOGIC_TABLE = 'AGGREGATION_LOGIC_TABLE';
    const ATOMIC_INDEX = 'ATOMIC_INDEX';
    const ATOMIC_METRIC = 'ATOMIC_METRIC';
    const BIZ_CATALOG = 'BIZ_CATALOG';
    const BIZ_METRIC = 'BIZ_METRIC';
    const CODE_TABLE = 'CODE_TABLE';
    const COMMON_CONDITION = 'COMMON_CONDITION';
    const COMPOSITE_METRIC = 'COMPOSITE_METRIC';
    const COMPOUND_METRIC = 'COMPOUND_METRIC';
    const CONDITION_GROUP = 'CONDITION_GROUP';
    const DEGENERATE_DIMENSION = 'DEGENERATE_DIMENSION';
    const DERIVATIVE_INDEX = 'DERIVATIVE_INDEX';
    const DERIVED_METRIC = 'DERIVED_METRIC';
    const DIMENSION = 'DIMENSION';
    const DIMENSION_ATTRIBUTE = 'DIMENSION_ATTRIBUTE';
    const DIMENSION_HIERARCHIES = 'DIMENSION_HIERARCHIES';
    const DIMENSION_LOGIC_TABLE = 'DIMENSION_LOGIC_TABLE';
    const DIMENSION_TABLE_ATTRIBUTE = 'DIMENSION_TABLE_ATTRIBUTE';
    const DIRECTORY = 'DIRECTORY';
    const FACT_ATTRIBUTE = 'FACT_ATTRIBUTE';
    const FACT_DIMENSION = 'FACT_DIMENSION';
    const FACT_LOGIC_TABLE = 'FACT_LOGIC_TABLE';
    const FACT_MEASURE = 'FACT_MEASURE';
    const _FUNCTION = 'FUNCTION';
    const INFO_ARCH = 'INFO_ARCH';
    const MODEL = 'MODEL';
    const QUALITY_RULE = 'QUALITY_RULE';
    const SECRECY_LEVEL = 'SECRECY_LEVEL';
    const STANDARD_ELEMENT = 'STANDARD_ELEMENT';
    const STANDARD_ELEMENT_TEMPLATE = 'STANDARD_ELEMENT_TEMPLATE';
    const SUBJECT = 'SUBJECT';
    const SUMMARY_DIMENSION_ATTRIBUTE = 'SUMMARY_DIMENSION_ATTRIBUTE';
    const SUMMARY_INDEX = 'SUMMARY_INDEX';
    const SUMMARY_TIME = 'SUMMARY_TIME';
    const TABLE_MODEL = 'TABLE_MODEL';
    const TABLE_MODEL_ATTRIBUTE = 'TABLE_MODEL_ATTRIBUTE';
    const TABLE_MODEL_LOGIC = 'TABLE_MODEL_LOGIC';
    const TABLE_TYPE = 'TABLE_TYPE';
    const TAG = 'TAG';
    const TIME_CONDITION = 'TIME_CONDITION';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AGGREGATION_LOGIC_TABLE,
            self::ATOMIC_INDEX,
            self::ATOMIC_METRIC,
            self::BIZ_CATALOG,
            self::BIZ_METRIC,
            self::CODE_TABLE,
            self::COMMON_CONDITION,
            self::COMPOSITE_METRIC,
            self::COMPOUND_METRIC,
            self::CONDITION_GROUP,
            self::DEGENERATE_DIMENSION,
            self::DERIVATIVE_INDEX,
            self::DERIVED_METRIC,
            self::DIMENSION,
            self::DIMENSION_ATTRIBUTE,
            self::DIMENSION_HIERARCHIES,
            self::DIMENSION_LOGIC_TABLE,
            self::DIMENSION_TABLE_ATTRIBUTE,
            self::DIRECTORY,
            self::FACT_ATTRIBUTE,
            self::FACT_DIMENSION,
            self::FACT_LOGIC_TABLE,
            self::FACT_MEASURE,
            self::_FUNCTION,
            self::INFO_ARCH,
            self::MODEL,
            self::QUALITY_RULE,
            self::SECRECY_LEVEL,
            self::STANDARD_ELEMENT,
            self::STANDARD_ELEMENT_TEMPLATE,
            self::SUBJECT,
            self::SUMMARY_DIMENSION_ATTRIBUTE,
            self::SUMMARY_INDEX,
            self::SUMMARY_TIME,
            self::TABLE_MODEL,
            self::TABLE_MODEL_ATTRIBUTE,
            self::TABLE_MODEL_LOGIC,
            self::TABLE_TYPE,
            self::TAG,
            self::TIME_CONDITION,
        ];
    }
}

