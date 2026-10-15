<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataFilterRuleResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataFilterRuleResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * batchId  数据过滤规则批次ID，标识同一批次内的多个过滤对象属于同一个规则配置。
    * filterObjectList  过滤对象信息列表，列出此规则下所有需进行数据过滤的具体数据库对象
    * filterRulesResp  filterRulesResp
    * advancedSettingResp  advancedSettingResp
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'batchId' => 'int',
            'filterObjectList' => '\HuaweiCloud\SDK\Drs\V5\Model\DataFilterObjectResp[]',
            'filterRulesResp' => '\HuaweiCloud\SDK\Drs\V5\Model\GeneralDataFilterResp',
            'advancedSettingResp' => '\HuaweiCloud\SDK\Drs\V5\Model\DataFilteringAdvancedSetting'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * batchId  数据过滤规则批次ID，标识同一批次内的多个过滤对象属于同一个规则配置。
    * filterObjectList  过滤对象信息列表，列出此规则下所有需进行数据过滤的具体数据库对象
    * filterRulesResp  filterRulesResp
    * advancedSettingResp  advancedSettingResp
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'batchId' => 'int64',
        'filterObjectList' => null,
        'filterRulesResp' => null,
        'advancedSettingResp' => null
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
    * batchId  数据过滤规则批次ID，标识同一批次内的多个过滤对象属于同一个规则配置。
    * filterObjectList  过滤对象信息列表，列出此规则下所有需进行数据过滤的具体数据库对象
    * filterRulesResp  filterRulesResp
    * advancedSettingResp  advancedSettingResp
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'batchId' => 'batch_id',
            'filterObjectList' => 'filter_object_list',
            'filterRulesResp' => 'filter_rules_resp',
            'advancedSettingResp' => 'advanced_setting_resp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * batchId  数据过滤规则批次ID，标识同一批次内的多个过滤对象属于同一个规则配置。
    * filterObjectList  过滤对象信息列表，列出此规则下所有需进行数据过滤的具体数据库对象
    * filterRulesResp  filterRulesResp
    * advancedSettingResp  advancedSettingResp
    *
    * @var string[]
    */
    protected static $setters = [
            'batchId' => 'setBatchId',
            'filterObjectList' => 'setFilterObjectList',
            'filterRulesResp' => 'setFilterRulesResp',
            'advancedSettingResp' => 'setAdvancedSettingResp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * batchId  数据过滤规则批次ID，标识同一批次内的多个过滤对象属于同一个规则配置。
    * filterObjectList  过滤对象信息列表，列出此规则下所有需进行数据过滤的具体数据库对象
    * filterRulesResp  filterRulesResp
    * advancedSettingResp  advancedSettingResp
    *
    * @var string[]
    */
    protected static $getters = [
            'batchId' => 'getBatchId',
            'filterObjectList' => 'getFilterObjectList',
            'filterRulesResp' => 'getFilterRulesResp',
            'advancedSettingResp' => 'getAdvancedSettingResp'
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
        $this->container['batchId'] = isset($data['batchId']) ? $data['batchId'] : null;
        $this->container['filterObjectList'] = isset($data['filterObjectList']) ? $data['filterObjectList'] : null;
        $this->container['filterRulesResp'] = isset($data['filterRulesResp']) ? $data['filterRulesResp'] : null;
        $this->container['advancedSettingResp'] = isset($data['advancedSettingResp']) ? $data['advancedSettingResp'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets batchId
    *  数据过滤规则批次ID，标识同一批次内的多个过滤对象属于同一个规则配置。
    *
    * @return int|null
    */
    public function getBatchId()
    {
        return $this->container['batchId'];
    }

    /**
    * Sets batchId
    *
    * @param int|null $batchId 数据过滤规则批次ID，标识同一批次内的多个过滤对象属于同一个规则配置。
    *
    * @return $this
    */
    public function setBatchId($batchId)
    {
        $this->container['batchId'] = $batchId;
        return $this;
    }

    /**
    * Gets filterObjectList
    *  过滤对象信息列表，列出此规则下所有需进行数据过滤的具体数据库对象
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\DataFilterObjectResp[]|null
    */
    public function getFilterObjectList()
    {
        return $this->container['filterObjectList'];
    }

    /**
    * Sets filterObjectList
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\DataFilterObjectResp[]|null $filterObjectList 过滤对象信息列表，列出此规则下所有需进行数据过滤的具体数据库对象
    *
    * @return $this
    */
    public function setFilterObjectList($filterObjectList)
    {
        $this->container['filterObjectList'] = $filterObjectList;
        return $this;
    }

    /**
    * Gets filterRulesResp
    *  filterRulesResp
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\GeneralDataFilterResp|null
    */
    public function getFilterRulesResp()
    {
        return $this->container['filterRulesResp'];
    }

    /**
    * Sets filterRulesResp
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\GeneralDataFilterResp|null $filterRulesResp filterRulesResp
    *
    * @return $this
    */
    public function setFilterRulesResp($filterRulesResp)
    {
        $this->container['filterRulesResp'] = $filterRulesResp;
        return $this;
    }

    /**
    * Gets advancedSettingResp
    *  advancedSettingResp
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\DataFilteringAdvancedSetting|null
    */
    public function getAdvancedSettingResp()
    {
        return $this->container['advancedSettingResp'];
    }

    /**
    * Sets advancedSettingResp
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\DataFilteringAdvancedSetting|null $advancedSettingResp advancedSettingResp
    *
    * @return $this
    */
    public function setAdvancedSettingResp($advancedSettingResp)
    {
        $this->container['advancedSettingResp'] = $advancedSettingResp;
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

