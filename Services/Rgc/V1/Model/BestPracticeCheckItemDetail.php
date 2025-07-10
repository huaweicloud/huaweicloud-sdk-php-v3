<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BestPracticeCheckItemDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BestPracticeCheckItemDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * checkItem  检查项编号
    * checkItemName  检查项描述
    * riskDescription  检查项风险描述
    * result  检测结果
    * scene  八大领域的细分场景
    * riskLevel  风险等级
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'checkItem' => 'int',
            'checkItemName' => 'string',
            'riskDescription' => 'string',
            'result' => 'string',
            'scene' => 'string',
            'riskLevel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * checkItem  检查项编号
    * checkItemName  检查项描述
    * riskDescription  检查项风险描述
    * result  检测结果
    * scene  八大领域的细分场景
    * riskLevel  风险等级
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'checkItem' => null,
        'checkItemName' => null,
        'riskDescription' => null,
        'result' => null,
        'scene' => null,
        'riskLevel' => null
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
    * checkItem  检查项编号
    * checkItemName  检查项描述
    * riskDescription  检查项风险描述
    * result  检测结果
    * scene  八大领域的细分场景
    * riskLevel  风险等级
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'checkItem' => 'check_item',
            'checkItemName' => 'check_item_name',
            'riskDescription' => 'risk_description',
            'result' => 'result',
            'scene' => 'scene',
            'riskLevel' => 'risk_level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * checkItem  检查项编号
    * checkItemName  检查项描述
    * riskDescription  检查项风险描述
    * result  检测结果
    * scene  八大领域的细分场景
    * riskLevel  风险等级
    *
    * @var string[]
    */
    protected static $setters = [
            'checkItem' => 'setCheckItem',
            'checkItemName' => 'setCheckItemName',
            'riskDescription' => 'setRiskDescription',
            'result' => 'setResult',
            'scene' => 'setScene',
            'riskLevel' => 'setRiskLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * checkItem  检查项编号
    * checkItemName  检查项描述
    * riskDescription  检查项风险描述
    * result  检测结果
    * scene  八大领域的细分场景
    * riskLevel  风险等级
    *
    * @var string[]
    */
    protected static $getters = [
            'checkItem' => 'getCheckItem',
            'checkItemName' => 'getCheckItemName',
            'riskDescription' => 'getRiskDescription',
            'result' => 'getResult',
            'scene' => 'getScene',
            'riskLevel' => 'getRiskLevel'
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
        $this->container['checkItem'] = isset($data['checkItem']) ? $data['checkItem'] : null;
        $this->container['checkItemName'] = isset($data['checkItemName']) ? $data['checkItemName'] : null;
        $this->container['riskDescription'] = isset($data['riskDescription']) ? $data['riskDescription'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['scene'] = isset($data['scene']) ? $data['scene'] : null;
        $this->container['riskLevel'] = isset($data['riskLevel']) ? $data['riskLevel'] : null;
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
    * Gets checkItem
    *  检查项编号
    *
    * @return int|null
    */
    public function getCheckItem()
    {
        return $this->container['checkItem'];
    }

    /**
    * Sets checkItem
    *
    * @param int|null $checkItem 检查项编号
    *
    * @return $this
    */
    public function setCheckItem($checkItem)
    {
        $this->container['checkItem'] = $checkItem;
        return $this;
    }

    /**
    * Gets checkItemName
    *  检查项描述
    *
    * @return string|null
    */
    public function getCheckItemName()
    {
        return $this->container['checkItemName'];
    }

    /**
    * Sets checkItemName
    *
    * @param string|null $checkItemName 检查项描述
    *
    * @return $this
    */
    public function setCheckItemName($checkItemName)
    {
        $this->container['checkItemName'] = $checkItemName;
        return $this;
    }

    /**
    * Gets riskDescription
    *  检查项风险描述
    *
    * @return string|null
    */
    public function getRiskDescription()
    {
        return $this->container['riskDescription'];
    }

    /**
    * Sets riskDescription
    *
    * @param string|null $riskDescription 检查项风险描述
    *
    * @return $this
    */
    public function setRiskDescription($riskDescription)
    {
        $this->container['riskDescription'] = $riskDescription;
        return $this;
    }

    /**
    * Gets result
    *  检测结果
    *
    * @return string|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string|null $result 检测结果
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets scene
    *  八大领域的细分场景
    *
    * @return string|null
    */
    public function getScene()
    {
        return $this->container['scene'];
    }

    /**
    * Sets scene
    *
    * @param string|null $scene 八大领域的细分场景
    *
    * @return $this
    */
    public function setScene($scene)
    {
        $this->container['scene'] = $scene;
        return $this;
    }

    /**
    * Gets riskLevel
    *  风险等级
    *
    * @return string|null
    */
    public function getRiskLevel()
    {
        return $this->container['riskLevel'];
    }

    /**
    * Sets riskLevel
    *
    * @param string|null $riskLevel 风险等级
    *
    * @return $this
    */
    public function setRiskLevel($riskLevel)
    {
        $this->container['riskLevel'] = $riskLevel;
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

