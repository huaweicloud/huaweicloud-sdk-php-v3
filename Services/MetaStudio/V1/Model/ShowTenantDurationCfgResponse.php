<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTenantDurationCfgResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTenantDurationCfgResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tenantId  租户id
    * basicMin  基础版最低时长（秒）
    * basicMax  基础版最高时长（秒）
    * basicAdviceValue  建议时长（秒）
    * middleMin  进阶版最低时长（秒）
    * middleMax  进阶版最高时长（秒）
    * middleAdviceValue  建议时长（秒）
    * advanceMin  高级版最低时长（秒）
    * advanceMax  高级版最高时长（秒）
    * advanceAdviceValue  建议时长（秒）
    * flexusMin  flexus版最低时长（秒）
    * flexusMax  flexus版最高时长（秒）
    * flexusAdviceValue  flexus建议时长（秒）
    * cmwwMin  出门问问最低时长（秒）
    * cmwwMax  出门问问最高时长（秒）
    * cmwwAdviceValue  出门问问建议时长（秒）
    * ljznMin  逻辑智能最低时长（秒）
    * ljznMax  逻辑智能最高时长（秒）
    * ljznAdviceValue  逻辑智能建议时长（秒）
    * shortAssessMin  短任务质量检测最低时长（秒）
    * shortAssessMax  短任务质量检测最高时长（秒）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tenantId' => 'string',
            'basicMin' => 'int',
            'basicMax' => 'int',
            'basicAdviceValue' => 'int',
            'middleMin' => 'int',
            'middleMax' => 'int',
            'middleAdviceValue' => 'int',
            'advanceMin' => 'int',
            'advanceMax' => 'int',
            'advanceAdviceValue' => 'int',
            'flexusMin' => 'int',
            'flexusMax' => 'int',
            'flexusAdviceValue' => 'int',
            'cmwwMin' => 'int',
            'cmwwMax' => 'int',
            'cmwwAdviceValue' => 'int',
            'ljznMin' => 'int',
            'ljznMax' => 'int',
            'ljznAdviceValue' => 'int',
            'shortAssessMin' => 'int',
            'shortAssessMax' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tenantId  租户id
    * basicMin  基础版最低时长（秒）
    * basicMax  基础版最高时长（秒）
    * basicAdviceValue  建议时长（秒）
    * middleMin  进阶版最低时长（秒）
    * middleMax  进阶版最高时长（秒）
    * middleAdviceValue  建议时长（秒）
    * advanceMin  高级版最低时长（秒）
    * advanceMax  高级版最高时长（秒）
    * advanceAdviceValue  建议时长（秒）
    * flexusMin  flexus版最低时长（秒）
    * flexusMax  flexus版最高时长（秒）
    * flexusAdviceValue  flexus建议时长（秒）
    * cmwwMin  出门问问最低时长（秒）
    * cmwwMax  出门问问最高时长（秒）
    * cmwwAdviceValue  出门问问建议时长（秒）
    * ljznMin  逻辑智能最低时长（秒）
    * ljznMax  逻辑智能最高时长（秒）
    * ljznAdviceValue  逻辑智能建议时长（秒）
    * shortAssessMin  短任务质量检测最低时长（秒）
    * shortAssessMax  短任务质量检测最高时长（秒）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tenantId' => null,
        'basicMin' => null,
        'basicMax' => null,
        'basicAdviceValue' => null,
        'middleMin' => null,
        'middleMax' => null,
        'middleAdviceValue' => null,
        'advanceMin' => null,
        'advanceMax' => null,
        'advanceAdviceValue' => null,
        'flexusMin' => null,
        'flexusMax' => null,
        'flexusAdviceValue' => null,
        'cmwwMin' => null,
        'cmwwMax' => null,
        'cmwwAdviceValue' => null,
        'ljznMin' => null,
        'ljznMax' => null,
        'ljznAdviceValue' => null,
        'shortAssessMin' => null,
        'shortAssessMax' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * tenantId  租户id
    * basicMin  基础版最低时长（秒）
    * basicMax  基础版最高时长（秒）
    * basicAdviceValue  建议时长（秒）
    * middleMin  进阶版最低时长（秒）
    * middleMax  进阶版最高时长（秒）
    * middleAdviceValue  建议时长（秒）
    * advanceMin  高级版最低时长（秒）
    * advanceMax  高级版最高时长（秒）
    * advanceAdviceValue  建议时长（秒）
    * flexusMin  flexus版最低时长（秒）
    * flexusMax  flexus版最高时长（秒）
    * flexusAdviceValue  flexus建议时长（秒）
    * cmwwMin  出门问问最低时长（秒）
    * cmwwMax  出门问问最高时长（秒）
    * cmwwAdviceValue  出门问问建议时长（秒）
    * ljznMin  逻辑智能最低时长（秒）
    * ljznMax  逻辑智能最高时长（秒）
    * ljznAdviceValue  逻辑智能建议时长（秒）
    * shortAssessMin  短任务质量检测最低时长（秒）
    * shortAssessMax  短任务质量检测最高时长（秒）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tenantId' => 'tenant_id',
            'basicMin' => 'basic_min',
            'basicMax' => 'basic_max',
            'basicAdviceValue' => 'basic_advice_value',
            'middleMin' => 'middle_min',
            'middleMax' => 'middle_max',
            'middleAdviceValue' => 'middle_advice_value',
            'advanceMin' => 'advance_min',
            'advanceMax' => 'advance_max',
            'advanceAdviceValue' => 'advance_advice_value',
            'flexusMin' => 'flexus_min',
            'flexusMax' => 'flexus_max',
            'flexusAdviceValue' => 'flexus_advice_value',
            'cmwwMin' => 'cmww_min',
            'cmwwMax' => 'cmww_max',
            'cmwwAdviceValue' => 'cmww_advice_value',
            'ljznMin' => 'ljzn_min',
            'ljznMax' => 'ljzn_max',
            'ljznAdviceValue' => 'ljzn_advice_value',
            'shortAssessMin' => 'short_assess_min',
            'shortAssessMax' => 'short_assess_max'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tenantId  租户id
    * basicMin  基础版最低时长（秒）
    * basicMax  基础版最高时长（秒）
    * basicAdviceValue  建议时长（秒）
    * middleMin  进阶版最低时长（秒）
    * middleMax  进阶版最高时长（秒）
    * middleAdviceValue  建议时长（秒）
    * advanceMin  高级版最低时长（秒）
    * advanceMax  高级版最高时长（秒）
    * advanceAdviceValue  建议时长（秒）
    * flexusMin  flexus版最低时长（秒）
    * flexusMax  flexus版最高时长（秒）
    * flexusAdviceValue  flexus建议时长（秒）
    * cmwwMin  出门问问最低时长（秒）
    * cmwwMax  出门问问最高时长（秒）
    * cmwwAdviceValue  出门问问建议时长（秒）
    * ljznMin  逻辑智能最低时长（秒）
    * ljznMax  逻辑智能最高时长（秒）
    * ljznAdviceValue  逻辑智能建议时长（秒）
    * shortAssessMin  短任务质量检测最低时长（秒）
    * shortAssessMax  短任务质量检测最高时长（秒）
    *
    * @var string[]
    */
    protected static $setters = [
            'tenantId' => 'setTenantId',
            'basicMin' => 'setBasicMin',
            'basicMax' => 'setBasicMax',
            'basicAdviceValue' => 'setBasicAdviceValue',
            'middleMin' => 'setMiddleMin',
            'middleMax' => 'setMiddleMax',
            'middleAdviceValue' => 'setMiddleAdviceValue',
            'advanceMin' => 'setAdvanceMin',
            'advanceMax' => 'setAdvanceMax',
            'advanceAdviceValue' => 'setAdvanceAdviceValue',
            'flexusMin' => 'setFlexusMin',
            'flexusMax' => 'setFlexusMax',
            'flexusAdviceValue' => 'setFlexusAdviceValue',
            'cmwwMin' => 'setCmwwMin',
            'cmwwMax' => 'setCmwwMax',
            'cmwwAdviceValue' => 'setCmwwAdviceValue',
            'ljznMin' => 'setLjznMin',
            'ljznMax' => 'setLjznMax',
            'ljznAdviceValue' => 'setLjznAdviceValue',
            'shortAssessMin' => 'setShortAssessMin',
            'shortAssessMax' => 'setShortAssessMax'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tenantId  租户id
    * basicMin  基础版最低时长（秒）
    * basicMax  基础版最高时长（秒）
    * basicAdviceValue  建议时长（秒）
    * middleMin  进阶版最低时长（秒）
    * middleMax  进阶版最高时长（秒）
    * middleAdviceValue  建议时长（秒）
    * advanceMin  高级版最低时长（秒）
    * advanceMax  高级版最高时长（秒）
    * advanceAdviceValue  建议时长（秒）
    * flexusMin  flexus版最低时长（秒）
    * flexusMax  flexus版最高时长（秒）
    * flexusAdviceValue  flexus建议时长（秒）
    * cmwwMin  出门问问最低时长（秒）
    * cmwwMax  出门问问最高时长（秒）
    * cmwwAdviceValue  出门问问建议时长（秒）
    * ljznMin  逻辑智能最低时长（秒）
    * ljznMax  逻辑智能最高时长（秒）
    * ljznAdviceValue  逻辑智能建议时长（秒）
    * shortAssessMin  短任务质量检测最低时长（秒）
    * shortAssessMax  短任务质量检测最高时长（秒）
    *
    * @var string[]
    */
    protected static $getters = [
            'tenantId' => 'getTenantId',
            'basicMin' => 'getBasicMin',
            'basicMax' => 'getBasicMax',
            'basicAdviceValue' => 'getBasicAdviceValue',
            'middleMin' => 'getMiddleMin',
            'middleMax' => 'getMiddleMax',
            'middleAdviceValue' => 'getMiddleAdviceValue',
            'advanceMin' => 'getAdvanceMin',
            'advanceMax' => 'getAdvanceMax',
            'advanceAdviceValue' => 'getAdvanceAdviceValue',
            'flexusMin' => 'getFlexusMin',
            'flexusMax' => 'getFlexusMax',
            'flexusAdviceValue' => 'getFlexusAdviceValue',
            'cmwwMin' => 'getCmwwMin',
            'cmwwMax' => 'getCmwwMax',
            'cmwwAdviceValue' => 'getCmwwAdviceValue',
            'ljznMin' => 'getLjznMin',
            'ljznMax' => 'getLjznMax',
            'ljznAdviceValue' => 'getLjznAdviceValue',
            'shortAssessMin' => 'getShortAssessMin',
            'shortAssessMax' => 'getShortAssessMax'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['basicMin'] = isset($data['basicMin']) ? $data['basicMin'] : null;
        $this->container['basicMax'] = isset($data['basicMax']) ? $data['basicMax'] : null;
        $this->container['basicAdviceValue'] = isset($data['basicAdviceValue']) ? $data['basicAdviceValue'] : null;
        $this->container['middleMin'] = isset($data['middleMin']) ? $data['middleMin'] : null;
        $this->container['middleMax'] = isset($data['middleMax']) ? $data['middleMax'] : null;
        $this->container['middleAdviceValue'] = isset($data['middleAdviceValue']) ? $data['middleAdviceValue'] : null;
        $this->container['advanceMin'] = isset($data['advanceMin']) ? $data['advanceMin'] : null;
        $this->container['advanceMax'] = isset($data['advanceMax']) ? $data['advanceMax'] : null;
        $this->container['advanceAdviceValue'] = isset($data['advanceAdviceValue']) ? $data['advanceAdviceValue'] : null;
        $this->container['flexusMin'] = isset($data['flexusMin']) ? $data['flexusMin'] : null;
        $this->container['flexusMax'] = isset($data['flexusMax']) ? $data['flexusMax'] : null;
        $this->container['flexusAdviceValue'] = isset($data['flexusAdviceValue']) ? $data['flexusAdviceValue'] : null;
        $this->container['cmwwMin'] = isset($data['cmwwMin']) ? $data['cmwwMin'] : null;
        $this->container['cmwwMax'] = isset($data['cmwwMax']) ? $data['cmwwMax'] : null;
        $this->container['cmwwAdviceValue'] = isset($data['cmwwAdviceValue']) ? $data['cmwwAdviceValue'] : null;
        $this->container['ljznMin'] = isset($data['ljznMin']) ? $data['ljznMin'] : null;
        $this->container['ljznMax'] = isset($data['ljznMax']) ? $data['ljznMax'] : null;
        $this->container['ljznAdviceValue'] = isset($data['ljznAdviceValue']) ? $data['ljznAdviceValue'] : null;
        $this->container['shortAssessMin'] = isset($data['shortAssessMin']) ? $data['shortAssessMin'] : null;
        $this->container['shortAssessMax'] = isset($data['shortAssessMax']) ? $data['shortAssessMax'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) > 300)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 300.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) < 180)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 180.";
            }
            if (!is_null($this->container['basicMin']) && ($this->container['basicMin'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'basicMin', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['basicMin']) && ($this->container['basicMin'] < 0)) {
                $invalidProperties[] = "invalid value for 'basicMin', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['basicMax']) && ($this->container['basicMax'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'basicMax', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['basicMax']) && ($this->container['basicMax'] < 0)) {
                $invalidProperties[] = "invalid value for 'basicMax', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['basicAdviceValue']) && ($this->container['basicAdviceValue'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'basicAdviceValue', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['basicAdviceValue']) && ($this->container['basicAdviceValue'] < 0)) {
                $invalidProperties[] = "invalid value for 'basicAdviceValue', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['middleMin']) && ($this->container['middleMin'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'middleMin', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['middleMin']) && ($this->container['middleMin'] < 0)) {
                $invalidProperties[] = "invalid value for 'middleMin', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['middleMax']) && ($this->container['middleMax'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'middleMax', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['middleMax']) && ($this->container['middleMax'] < 0)) {
                $invalidProperties[] = "invalid value for 'middleMax', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['middleAdviceValue']) && ($this->container['middleAdviceValue'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'middleAdviceValue', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['middleAdviceValue']) && ($this->container['middleAdviceValue'] < 0)) {
                $invalidProperties[] = "invalid value for 'middleAdviceValue', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['advanceMin']) && ($this->container['advanceMin'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'advanceMin', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['advanceMin']) && ($this->container['advanceMin'] < 0)) {
                $invalidProperties[] = "invalid value for 'advanceMin', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['advanceMax']) && ($this->container['advanceMax'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'advanceMax', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['advanceMax']) && ($this->container['advanceMax'] < 0)) {
                $invalidProperties[] = "invalid value for 'advanceMax', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['advanceAdviceValue']) && ($this->container['advanceAdviceValue'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'advanceAdviceValue', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['advanceAdviceValue']) && ($this->container['advanceAdviceValue'] < 0)) {
                $invalidProperties[] = "invalid value for 'advanceAdviceValue', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['flexusMin']) && ($this->container['flexusMin'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'flexusMin', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['flexusMin']) && ($this->container['flexusMin'] < 0)) {
                $invalidProperties[] = "invalid value for 'flexusMin', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['flexusMax']) && ($this->container['flexusMax'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'flexusMax', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['flexusMax']) && ($this->container['flexusMax'] < 0)) {
                $invalidProperties[] = "invalid value for 'flexusMax', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['flexusAdviceValue']) && ($this->container['flexusAdviceValue'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'flexusAdviceValue', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['flexusAdviceValue']) && ($this->container['flexusAdviceValue'] < 0)) {
                $invalidProperties[] = "invalid value for 'flexusAdviceValue', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cmwwMin']) && ($this->container['cmwwMin'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'cmwwMin', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['cmwwMin']) && ($this->container['cmwwMin'] < 0)) {
                $invalidProperties[] = "invalid value for 'cmwwMin', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cmwwMax']) && ($this->container['cmwwMax'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'cmwwMax', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['cmwwMax']) && ($this->container['cmwwMax'] < 0)) {
                $invalidProperties[] = "invalid value for 'cmwwMax', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cmwwAdviceValue']) && ($this->container['cmwwAdviceValue'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'cmwwAdviceValue', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['cmwwAdviceValue']) && ($this->container['cmwwAdviceValue'] < 0)) {
                $invalidProperties[] = "invalid value for 'cmwwAdviceValue', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ljznMin']) && ($this->container['ljznMin'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'ljznMin', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['ljznMin']) && ($this->container['ljznMin'] < 0)) {
                $invalidProperties[] = "invalid value for 'ljznMin', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ljznMax']) && ($this->container['ljznMax'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'ljznMax', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['ljznMax']) && ($this->container['ljznMax'] < 0)) {
                $invalidProperties[] = "invalid value for 'ljznMax', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ljznAdviceValue']) && ($this->container['ljznAdviceValue'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'ljznAdviceValue', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['ljznAdviceValue']) && ($this->container['ljznAdviceValue'] < 0)) {
                $invalidProperties[] = "invalid value for 'ljznAdviceValue', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['shortAssessMin']) && ($this->container['shortAssessMin'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'shortAssessMin', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['shortAssessMin']) && ($this->container['shortAssessMin'] < 0)) {
                $invalidProperties[] = "invalid value for 'shortAssessMin', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['shortAssessMax']) && ($this->container['shortAssessMax'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'shortAssessMax', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['shortAssessMax']) && ($this->container['shortAssessMax'] < 0)) {
                $invalidProperties[] = "invalid value for 'shortAssessMax', must be bigger than or equal to 0.";
            }
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets tenantId
    *  租户id
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 租户id
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets basicMin
    *  基础版最低时长（秒）
    *
    * @return int|null
    */
    public function getBasicMin()
    {
        return $this->container['basicMin'];
    }

    /**
    * Sets basicMin
    *
    * @param int|null $basicMin 基础版最低时长（秒）
    *
    * @return $this
    */
    public function setBasicMin($basicMin)
    {
        $this->container['basicMin'] = $basicMin;
        return $this;
    }

    /**
    * Gets basicMax
    *  基础版最高时长（秒）
    *
    * @return int|null
    */
    public function getBasicMax()
    {
        return $this->container['basicMax'];
    }

    /**
    * Sets basicMax
    *
    * @param int|null $basicMax 基础版最高时长（秒）
    *
    * @return $this
    */
    public function setBasicMax($basicMax)
    {
        $this->container['basicMax'] = $basicMax;
        return $this;
    }

    /**
    * Gets basicAdviceValue
    *  建议时长（秒）
    *
    * @return int|null
    */
    public function getBasicAdviceValue()
    {
        return $this->container['basicAdviceValue'];
    }

    /**
    * Sets basicAdviceValue
    *
    * @param int|null $basicAdviceValue 建议时长（秒）
    *
    * @return $this
    */
    public function setBasicAdviceValue($basicAdviceValue)
    {
        $this->container['basicAdviceValue'] = $basicAdviceValue;
        return $this;
    }

    /**
    * Gets middleMin
    *  进阶版最低时长（秒）
    *
    * @return int|null
    */
    public function getMiddleMin()
    {
        return $this->container['middleMin'];
    }

    /**
    * Sets middleMin
    *
    * @param int|null $middleMin 进阶版最低时长（秒）
    *
    * @return $this
    */
    public function setMiddleMin($middleMin)
    {
        $this->container['middleMin'] = $middleMin;
        return $this;
    }

    /**
    * Gets middleMax
    *  进阶版最高时长（秒）
    *
    * @return int|null
    */
    public function getMiddleMax()
    {
        return $this->container['middleMax'];
    }

    /**
    * Sets middleMax
    *
    * @param int|null $middleMax 进阶版最高时长（秒）
    *
    * @return $this
    */
    public function setMiddleMax($middleMax)
    {
        $this->container['middleMax'] = $middleMax;
        return $this;
    }

    /**
    * Gets middleAdviceValue
    *  建议时长（秒）
    *
    * @return int|null
    */
    public function getMiddleAdviceValue()
    {
        return $this->container['middleAdviceValue'];
    }

    /**
    * Sets middleAdviceValue
    *
    * @param int|null $middleAdviceValue 建议时长（秒）
    *
    * @return $this
    */
    public function setMiddleAdviceValue($middleAdviceValue)
    {
        $this->container['middleAdviceValue'] = $middleAdviceValue;
        return $this;
    }

    /**
    * Gets advanceMin
    *  高级版最低时长（秒）
    *
    * @return int|null
    */
    public function getAdvanceMin()
    {
        return $this->container['advanceMin'];
    }

    /**
    * Sets advanceMin
    *
    * @param int|null $advanceMin 高级版最低时长（秒）
    *
    * @return $this
    */
    public function setAdvanceMin($advanceMin)
    {
        $this->container['advanceMin'] = $advanceMin;
        return $this;
    }

    /**
    * Gets advanceMax
    *  高级版最高时长（秒）
    *
    * @return int|null
    */
    public function getAdvanceMax()
    {
        return $this->container['advanceMax'];
    }

    /**
    * Sets advanceMax
    *
    * @param int|null $advanceMax 高级版最高时长（秒）
    *
    * @return $this
    */
    public function setAdvanceMax($advanceMax)
    {
        $this->container['advanceMax'] = $advanceMax;
        return $this;
    }

    /**
    * Gets advanceAdviceValue
    *  建议时长（秒）
    *
    * @return int|null
    */
    public function getAdvanceAdviceValue()
    {
        return $this->container['advanceAdviceValue'];
    }

    /**
    * Sets advanceAdviceValue
    *
    * @param int|null $advanceAdviceValue 建议时长（秒）
    *
    * @return $this
    */
    public function setAdvanceAdviceValue($advanceAdviceValue)
    {
        $this->container['advanceAdviceValue'] = $advanceAdviceValue;
        return $this;
    }

    /**
    * Gets flexusMin
    *  flexus版最低时长（秒）
    *
    * @return int|null
    */
    public function getFlexusMin()
    {
        return $this->container['flexusMin'];
    }

    /**
    * Sets flexusMin
    *
    * @param int|null $flexusMin flexus版最低时长（秒）
    *
    * @return $this
    */
    public function setFlexusMin($flexusMin)
    {
        $this->container['flexusMin'] = $flexusMin;
        return $this;
    }

    /**
    * Gets flexusMax
    *  flexus版最高时长（秒）
    *
    * @return int|null
    */
    public function getFlexusMax()
    {
        return $this->container['flexusMax'];
    }

    /**
    * Sets flexusMax
    *
    * @param int|null $flexusMax flexus版最高时长（秒）
    *
    * @return $this
    */
    public function setFlexusMax($flexusMax)
    {
        $this->container['flexusMax'] = $flexusMax;
        return $this;
    }

    /**
    * Gets flexusAdviceValue
    *  flexus建议时长（秒）
    *
    * @return int|null
    */
    public function getFlexusAdviceValue()
    {
        return $this->container['flexusAdviceValue'];
    }

    /**
    * Sets flexusAdviceValue
    *
    * @param int|null $flexusAdviceValue flexus建议时长（秒）
    *
    * @return $this
    */
    public function setFlexusAdviceValue($flexusAdviceValue)
    {
        $this->container['flexusAdviceValue'] = $flexusAdviceValue;
        return $this;
    }

    /**
    * Gets cmwwMin
    *  出门问问最低时长（秒）
    *
    * @return int|null
    */
    public function getCmwwMin()
    {
        return $this->container['cmwwMin'];
    }

    /**
    * Sets cmwwMin
    *
    * @param int|null $cmwwMin 出门问问最低时长（秒）
    *
    * @return $this
    */
    public function setCmwwMin($cmwwMin)
    {
        $this->container['cmwwMin'] = $cmwwMin;
        return $this;
    }

    /**
    * Gets cmwwMax
    *  出门问问最高时长（秒）
    *
    * @return int|null
    */
    public function getCmwwMax()
    {
        return $this->container['cmwwMax'];
    }

    /**
    * Sets cmwwMax
    *
    * @param int|null $cmwwMax 出门问问最高时长（秒）
    *
    * @return $this
    */
    public function setCmwwMax($cmwwMax)
    {
        $this->container['cmwwMax'] = $cmwwMax;
        return $this;
    }

    /**
    * Gets cmwwAdviceValue
    *  出门问问建议时长（秒）
    *
    * @return int|null
    */
    public function getCmwwAdviceValue()
    {
        return $this->container['cmwwAdviceValue'];
    }

    /**
    * Sets cmwwAdviceValue
    *
    * @param int|null $cmwwAdviceValue 出门问问建议时长（秒）
    *
    * @return $this
    */
    public function setCmwwAdviceValue($cmwwAdviceValue)
    {
        $this->container['cmwwAdviceValue'] = $cmwwAdviceValue;
        return $this;
    }

    /**
    * Gets ljznMin
    *  逻辑智能最低时长（秒）
    *
    * @return int|null
    */
    public function getLjznMin()
    {
        return $this->container['ljznMin'];
    }

    /**
    * Sets ljznMin
    *
    * @param int|null $ljznMin 逻辑智能最低时长（秒）
    *
    * @return $this
    */
    public function setLjznMin($ljznMin)
    {
        $this->container['ljznMin'] = $ljznMin;
        return $this;
    }

    /**
    * Gets ljznMax
    *  逻辑智能最高时长（秒）
    *
    * @return int|null
    */
    public function getLjznMax()
    {
        return $this->container['ljznMax'];
    }

    /**
    * Sets ljznMax
    *
    * @param int|null $ljznMax 逻辑智能最高时长（秒）
    *
    * @return $this
    */
    public function setLjznMax($ljznMax)
    {
        $this->container['ljznMax'] = $ljznMax;
        return $this;
    }

    /**
    * Gets ljznAdviceValue
    *  逻辑智能建议时长（秒）
    *
    * @return int|null
    */
    public function getLjznAdviceValue()
    {
        return $this->container['ljznAdviceValue'];
    }

    /**
    * Sets ljznAdviceValue
    *
    * @param int|null $ljznAdviceValue 逻辑智能建议时长（秒）
    *
    * @return $this
    */
    public function setLjznAdviceValue($ljznAdviceValue)
    {
        $this->container['ljznAdviceValue'] = $ljznAdviceValue;
        return $this;
    }

    /**
    * Gets shortAssessMin
    *  短任务质量检测最低时长（秒）
    *
    * @return int|null
    */
    public function getShortAssessMin()
    {
        return $this->container['shortAssessMin'];
    }

    /**
    * Sets shortAssessMin
    *
    * @param int|null $shortAssessMin 短任务质量检测最低时长（秒）
    *
    * @return $this
    */
    public function setShortAssessMin($shortAssessMin)
    {
        $this->container['shortAssessMin'] = $shortAssessMin;
        return $this;
    }

    /**
    * Gets shortAssessMax
    *  短任务质量检测最高时长（秒）
    *
    * @return int|null
    */
    public function getShortAssessMax()
    {
        return $this->container['shortAssessMax'];
    }

    /**
    * Sets shortAssessMax
    *
    * @param int|null $shortAssessMax 短任务质量检测最高时长（秒）
    *
    * @return $this
    */
    public function setShortAssessMax($shortAssessMax)
    {
        $this->container['shortAssessMax'] = $shortAssessMax;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

