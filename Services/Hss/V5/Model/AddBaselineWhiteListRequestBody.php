<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddBaselineWhiteListRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddBaselineWhiteListRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * osType  基线检查的操作系统 - Linux - Windows
    * ruleType  基线检查白名单的规则范围 - specific_host：部分主机 - all_host：全部主机
    * hostIdList  rule_type为specific_host时，该字段为待添加的白名单主机id列表，rule_type为all_host时无该字段
    * ruleList  待添加的白名单的检查项列表
    * description  基线白名单备注
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'osType' => 'string',
            'ruleType' => 'string',
            'hostIdList' => 'string[]',
            'ruleList' => '\HuaweiCloud\SDK\Hss\V5\Model\AddBaselineWhiteListRequestBodyRuleList[]',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * osType  基线检查的操作系统 - Linux - Windows
    * ruleType  基线检查白名单的规则范围 - specific_host：部分主机 - all_host：全部主机
    * hostIdList  rule_type为specific_host时，该字段为待添加的白名单主机id列表，rule_type为all_host时无该字段
    * ruleList  待添加的白名单的检查项列表
    * description  基线白名单备注
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'osType' => null,
        'ruleType' => null,
        'hostIdList' => null,
        'ruleList' => null,
        'description' => null
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
    * osType  基线检查的操作系统 - Linux - Windows
    * ruleType  基线检查白名单的规则范围 - specific_host：部分主机 - all_host：全部主机
    * hostIdList  rule_type为specific_host时，该字段为待添加的白名单主机id列表，rule_type为all_host时无该字段
    * ruleList  待添加的白名单的检查项列表
    * description  基线白名单备注
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'osType' => 'os_type',
            'ruleType' => 'rule_type',
            'hostIdList' => 'host_id_list',
            'ruleList' => 'rule_list',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * osType  基线检查的操作系统 - Linux - Windows
    * ruleType  基线检查白名单的规则范围 - specific_host：部分主机 - all_host：全部主机
    * hostIdList  rule_type为specific_host时，该字段为待添加的白名单主机id列表，rule_type为all_host时无该字段
    * ruleList  待添加的白名单的检查项列表
    * description  基线白名单备注
    *
    * @var string[]
    */
    protected static $setters = [
            'osType' => 'setOsType',
            'ruleType' => 'setRuleType',
            'hostIdList' => 'setHostIdList',
            'ruleList' => 'setRuleList',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * osType  基线检查的操作系统 - Linux - Windows
    * ruleType  基线检查白名单的规则范围 - specific_host：部分主机 - all_host：全部主机
    * hostIdList  rule_type为specific_host时，该字段为待添加的白名单主机id列表，rule_type为all_host时无该字段
    * ruleList  待添加的白名单的检查项列表
    * description  基线白名单备注
    *
    * @var string[]
    */
    protected static $getters = [
            'osType' => 'getOsType',
            'ruleType' => 'getRuleType',
            'hostIdList' => 'getHostIdList',
            'ruleList' => 'getRuleList',
            'description' => 'getDescription'
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
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['ruleType'] = isset($data['ruleType']) ? $data['ruleType'] : null;
        $this->container['hostIdList'] = isset($data['hostIdList']) ? $data['hostIdList'] : null;
        $this->container['ruleList'] = isset($data['ruleList']) ? $data['ruleList'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['osType'] === null) {
            $invalidProperties[] = "'osType' can't be null";
        }
            if ((mb_strlen($this->container['osType']) > 32)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^(Linux|Windows)$/", $this->container['osType'])) {
                $invalidProperties[] = "invalid value for 'osType', must be conform to the pattern /^(Linux|Windows)$/.";
            }
        if ($this->container['ruleType'] === null) {
            $invalidProperties[] = "'ruleType' can't be null";
        }
            if ((mb_strlen($this->container['ruleType']) > 32)) {
                $invalidProperties[] = "invalid value for 'ruleType', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['ruleType']) < 0)) {
                $invalidProperties[] = "invalid value for 'ruleType', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^(specific_host|all_host)$/", $this->container['ruleType'])) {
                $invalidProperties[] = "invalid value for 'ruleType', must be conform to the pattern /^(specific_host|all_host)$/.";
            }
        if ($this->container['ruleList'] === null) {
            $invalidProperties[] = "'ruleList' can't be null";
        }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^.*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^.*$/.";
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
    * Gets osType
    *  基线检查的操作系统 - Linux - Windows
    *
    * @return string
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string $osType 基线检查的操作系统 - Linux - Windows
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets ruleType
    *  基线检查白名单的规则范围 - specific_host：部分主机 - all_host：全部主机
    *
    * @return string
    */
    public function getRuleType()
    {
        return $this->container['ruleType'];
    }

    /**
    * Sets ruleType
    *
    * @param string $ruleType 基线检查白名单的规则范围 - specific_host：部分主机 - all_host：全部主机
    *
    * @return $this
    */
    public function setRuleType($ruleType)
    {
        $this->container['ruleType'] = $ruleType;
        return $this;
    }

    /**
    * Gets hostIdList
    *  rule_type为specific_host时，该字段为待添加的白名单主机id列表，rule_type为all_host时无该字段
    *
    * @return string[]|null
    */
    public function getHostIdList()
    {
        return $this->container['hostIdList'];
    }

    /**
    * Sets hostIdList
    *
    * @param string[]|null $hostIdList rule_type为specific_host时，该字段为待添加的白名单主机id列表，rule_type为all_host时无该字段
    *
    * @return $this
    */
    public function setHostIdList($hostIdList)
    {
        $this->container['hostIdList'] = $hostIdList;
        return $this;
    }

    /**
    * Gets ruleList
    *  待添加的白名单的检查项列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\AddBaselineWhiteListRequestBodyRuleList[]
    */
    public function getRuleList()
    {
        return $this->container['ruleList'];
    }

    /**
    * Sets ruleList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\AddBaselineWhiteListRequestBodyRuleList[] $ruleList 待添加的白名单的检查项列表
    *
    * @return $this
    */
    public function setRuleList($ruleList)
    {
        $this->container['ruleList'] = $ruleList;
        return $this;
    }

    /**
    * Gets description
    *  基线白名单备注
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 基线白名单备注
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

