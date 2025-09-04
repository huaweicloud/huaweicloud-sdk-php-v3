<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EdgeAppInstanceDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EdgeAppInstanceDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * edgeAppId  边缘应用id，只允许数字、英文小写、中划线，切必须以字母或数字结尾
    * appVersion  边缘应用版本，只允许数字、英文小写、中划线，切必须以字母或数字结尾
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'edgeAppId' => 'string',
            'appVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * edgeAppId  边缘应用id，只允许数字、英文小写、中划线，切必须以字母或数字结尾
    * appVersion  边缘应用版本，只允许数字、英文小写、中划线，切必须以字母或数字结尾
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'edgeAppId' => null,
        'appVersion' => null
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
    * edgeAppId  边缘应用id，只允许数字、英文小写、中划线，切必须以字母或数字结尾
    * appVersion  边缘应用版本，只允许数字、英文小写、中划线，切必须以字母或数字结尾
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'edgeAppId' => 'edge_app_id',
            'appVersion' => 'app_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * edgeAppId  边缘应用id，只允许数字、英文小写、中划线，切必须以字母或数字结尾
    * appVersion  边缘应用版本，只允许数字、英文小写、中划线，切必须以字母或数字结尾
    *
    * @var string[]
    */
    protected static $setters = [
            'edgeAppId' => 'setEdgeAppId',
            'appVersion' => 'setAppVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * edgeAppId  边缘应用id，只允许数字、英文小写、中划线，切必须以字母或数字结尾
    * appVersion  边缘应用版本，只允许数字、英文小写、中划线，切必须以字母或数字结尾
    *
    * @var string[]
    */
    protected static $getters = [
            'edgeAppId' => 'getEdgeAppId',
            'appVersion' => 'getAppVersion'
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
        $this->container['edgeAppId'] = isset($data['edgeAppId']) ? $data['edgeAppId'] : null;
        $this->container['appVersion'] = isset($data['appVersion']) ? $data['appVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['edgeAppId'] === null) {
            $invalidProperties[] = "'edgeAppId' can't be null";
        }
            if ((mb_strlen($this->container['edgeAppId']) > 32)) {
                $invalidProperties[] = "invalid value for 'edgeAppId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['edgeAppId']) < 4)) {
                $invalidProperties[] = "invalid value for 'edgeAppId', the character length must be bigger than or equal to 4.";
            }
            if (!preg_match("/^[A-Za-z0-9-_$]*$/", $this->container['edgeAppId'])) {
                $invalidProperties[] = "invalid value for 'edgeAppId', must be conform to the pattern /^[A-Za-z0-9-_$]*$/.";
            }
            if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appVersion']) && !preg_match("/^[A-Za-z0-9-_.]*$/", $this->container['appVersion'])) {
                $invalidProperties[] = "invalid value for 'appVersion', must be conform to the pattern /^[A-Za-z0-9-_.]*$/.";
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
    * Gets edgeAppId
    *  边缘应用id，只允许数字、英文小写、中划线，切必须以字母或数字结尾
    *
    * @return string
    */
    public function getEdgeAppId()
    {
        return $this->container['edgeAppId'];
    }

    /**
    * Sets edgeAppId
    *
    * @param string $edgeAppId 边缘应用id，只允许数字、英文小写、中划线，切必须以字母或数字结尾
    *
    * @return $this
    */
    public function setEdgeAppId($edgeAppId)
    {
        $this->container['edgeAppId'] = $edgeAppId;
        return $this;
    }

    /**
    * Gets appVersion
    *  边缘应用版本，只允许数字、英文小写、中划线，切必须以字母或数字结尾
    *
    * @return string|null
    */
    public function getAppVersion()
    {
        return $this->container['appVersion'];
    }

    /**
    * Sets appVersion
    *
    * @param string|null $appVersion 边缘应用版本，只允许数字、英文小写、中划线，切必须以字母或数字结尾
    *
    * @return $this
    */
    public function setAppVersion($appVersion)
    {
        $this->container['appVersion'] = $appVersion;
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

