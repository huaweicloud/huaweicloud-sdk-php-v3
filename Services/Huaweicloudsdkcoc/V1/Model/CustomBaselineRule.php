<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomBaselineRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomBaselineRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * ruleName  规则名称
    * product  产品
    * complianceLevel  合规性报告等级
    * patchItems  基线补丁信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'ruleName' => 'string',
            'product' => 'string',
            'complianceLevel' => 'string',
            'patchItems' => '\HuaweiCloud\SDK\Coc\V1\Model\CustomBaselineRulePatchItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * ruleName  规则名称
    * product  产品
    * complianceLevel  合规性报告等级
    * patchItems  基线补丁信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'ruleName' => null,
        'product' => null,
        'complianceLevel' => null,
        'patchItems' => null
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
    * id  id
    * ruleName  规则名称
    * product  产品
    * complianceLevel  合规性报告等级
    * patchItems  基线补丁信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'ruleName' => 'rule_name',
            'product' => 'product',
            'complianceLevel' => 'compliance_level',
            'patchItems' => 'patch_items'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * ruleName  规则名称
    * product  产品
    * complianceLevel  合规性报告等级
    * patchItems  基线补丁信息
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'ruleName' => 'setRuleName',
            'product' => 'setProduct',
            'complianceLevel' => 'setComplianceLevel',
            'patchItems' => 'setPatchItems'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * ruleName  规则名称
    * product  产品
    * complianceLevel  合规性报告等级
    * patchItems  基线补丁信息
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'ruleName' => 'getRuleName',
            'product' => 'getProduct',
            'complianceLevel' => 'getComplianceLevel',
            'patchItems' => 'getPatchItems'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['complianceLevel'] = isset($data['complianceLevel']) ? $data['complianceLevel'] : null;
        $this->container['patchItems'] = isset($data['patchItems']) ? $data['patchItems'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ruleName']) && (mb_strlen($this->container['ruleName']) > 200)) {
                $invalidProperties[] = "invalid value for 'ruleName', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['ruleName']) && (mb_strlen($this->container['ruleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'ruleName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['product'] === null) {
            $invalidProperties[] = "'product' can't be null";
        }
            if ((mb_strlen($this->container['product']) > 100)) {
                $invalidProperties[] = "invalid value for 'product', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['product']) < 0)) {
                $invalidProperties[] = "invalid value for 'product', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['complianceLevel'] === null) {
            $invalidProperties[] = "'complianceLevel' can't be null";
        }
            if ((mb_strlen($this->container['complianceLevel']) > 32)) {
                $invalidProperties[] = "invalid value for 'complianceLevel', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['complianceLevel']) < 1)) {
                $invalidProperties[] = "invalid value for 'complianceLevel', the character length must be bigger than or equal to 1.";
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
    * Gets id
    *  id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets ruleName
    *  规则名称
    *
    * @return string|null
    */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
    * Sets ruleName
    *
    * @param string|null $ruleName 规则名称
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets product
    *  产品
    *
    * @return string
    */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
    * Sets product
    *
    * @param string $product 产品
    *
    * @return $this
    */
    public function setProduct($product)
    {
        $this->container['product'] = $product;
        return $this;
    }

    /**
    * Gets complianceLevel
    *  合规性报告等级
    *
    * @return string
    */
    public function getComplianceLevel()
    {
        return $this->container['complianceLevel'];
    }

    /**
    * Sets complianceLevel
    *
    * @param string $complianceLevel 合规性报告等级
    *
    * @return $this
    */
    public function setComplianceLevel($complianceLevel)
    {
        $this->container['complianceLevel'] = $complianceLevel;
        return $this;
    }

    /**
    * Gets patchItems
    *  基线补丁信息
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\CustomBaselineRulePatchItem[]|null
    */
    public function getPatchItems()
    {
        return $this->container['patchItems'];
    }

    /**
    * Sets patchItems
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\CustomBaselineRulePatchItem[]|null $patchItems 基线补丁信息
    *
    * @return $this
    */
    public function setPatchItems($patchItems)
    {
        $this->container['patchItems'] = $patchItems;
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

