<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AttackDistributionItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AttackDistributionItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  统计指标类型： - compliance_total_matched：内容合规检测命中次数 - injection_total_matched：提示词注入攻击检测命中次数
    * num  该类型总命中次数
    * items  子类型分布列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'num' => 'int',
            'items' => '\HuaweiCloud\SDK\Waf\V1\Model\AttackSubItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  统计指标类型： - compliance_total_matched：内容合规检测命中次数 - injection_total_matched：提示词注入攻击检测命中次数
    * num  该类型总命中次数
    * items  子类型分布列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'num' => 'int64',
        'items' => null
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
    * key  统计指标类型： - compliance_total_matched：内容合规检测命中次数 - injection_total_matched：提示词注入攻击检测命中次数
    * num  该类型总命中次数
    * items  子类型分布列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'num' => 'num',
            'items' => 'items'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  统计指标类型： - compliance_total_matched：内容合规检测命中次数 - injection_total_matched：提示词注入攻击检测命中次数
    * num  该类型总命中次数
    * items  子类型分布列表
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'num' => 'setNum',
            'items' => 'setItems'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  统计指标类型： - compliance_total_matched：内容合规检测命中次数 - injection_total_matched：提示词注入攻击检测命中次数
    * num  该类型总命中次数
    * items  子类型分布列表
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'num' => 'getNum',
            'items' => 'getItems'
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['num'] = isset($data['num']) ? $data['num'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
            if ((mb_strlen($this->container['key']) > 128)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['key']) < 1)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['num'] === null) {
            $invalidProperties[] = "'num' can't be null";
        }
            if (($this->container['num'] > 9999999999)) {
                $invalidProperties[] = "invalid value for 'num', must be smaller than or equal to 9999999999.";
            }
            if (($this->container['num'] < 0)) {
                $invalidProperties[] = "invalid value for 'num', must be bigger than or equal to 0.";
            }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
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
    * Gets key
    *  统计指标类型： - compliance_total_matched：内容合规检测命中次数 - injection_total_matched：提示词注入攻击检测命中次数
    *
    * @return string
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string $key 统计指标类型： - compliance_total_matched：内容合规检测命中次数 - injection_total_matched：提示词注入攻击检测命中次数
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets num
    *  该类型总命中次数
    *
    * @return int
    */
    public function getNum()
    {
        return $this->container['num'];
    }

    /**
    * Sets num
    *
    * @param int $num 该类型总命中次数
    *
    * @return $this
    */
    public function setNum($num)
    {
        $this->container['num'] = $num;
        return $this;
    }

    /**
    * Gets items
    *  子类型分布列表
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\AttackSubItem[]
    */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
    * Sets items
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\AttackSubItem[] $items 子类型分布列表
    *
    * @return $this
    */
    public function setItems($items)
    {
        $this->container['items'] = $items;
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

