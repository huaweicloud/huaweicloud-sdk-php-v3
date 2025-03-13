<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClassificationResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClassificationResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * result  result
    * securityLevel  是否配置了密级
    * classification  是否配置了分类
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'result' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DiagnoseResult',
            'securityLevel' => 'bool',
            'classification' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * result  result
    * securityLevel  是否配置了密级
    * classification  是否配置了分类
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'result' => null,
        'securityLevel' => null,
        'classification' => null
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
    * result  result
    * securityLevel  是否配置了密级
    * classification  是否配置了分类
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'result' => 'result',
            'securityLevel' => 'security_level',
            'classification' => 'classification'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * result  result
    * securityLevel  是否配置了密级
    * classification  是否配置了分类
    *
    * @var string[]
    */
    protected static $setters = [
            'result' => 'setResult',
            'securityLevel' => 'setSecurityLevel',
            'classification' => 'setClassification'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * result  result
    * securityLevel  是否配置了密级
    * classification  是否配置了分类
    *
    * @var string[]
    */
    protected static $getters = [
            'result' => 'getResult',
            'securityLevel' => 'getSecurityLevel',
            'classification' => 'getClassification'
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
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['securityLevel'] = isset($data['securityLevel']) ? $data['securityLevel'] : null;
        $this->container['classification'] = isset($data['classification']) ? $data['classification'] : null;
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
    * Gets result
    *  result
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DiagnoseResult|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DiagnoseResult|null $result result
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets securityLevel
    *  是否配置了密级
    *
    * @return bool|null
    */
    public function getSecurityLevel()
    {
        return $this->container['securityLevel'];
    }

    /**
    * Sets securityLevel
    *
    * @param bool|null $securityLevel 是否配置了密级
    *
    * @return $this
    */
    public function setSecurityLevel($securityLevel)
    {
        $this->container['securityLevel'] = $securityLevel;
        return $this;
    }

    /**
    * Gets classification
    *  是否配置了分类
    *
    * @return bool|null
    */
    public function getClassification()
    {
        return $this->container['classification'];
    }

    /**
    * Sets classification
    *
    * @param bool|null $classification 是否配置了分类
    *
    * @return $this
    */
    public function setClassification($classification)
    {
        $this->container['classification'] = $classification;
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

