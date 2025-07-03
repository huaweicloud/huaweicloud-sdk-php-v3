<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTopologyTreeRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTopologyTreeRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * regionId  区域id。
    * businessId  应用id。
    * envTagId  环境标签id。
    * envKeyword  环境关键字。
    * xBusinessId  应用id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regionId' => 'string',
            'businessId' => 'int',
            'envTagId' => 'int',
            'envKeyword' => 'string',
            'xBusinessId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * regionId  区域id。
    * businessId  应用id。
    * envTagId  环境标签id。
    * envKeyword  环境关键字。
    * xBusinessId  应用id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regionId' => null,
        'businessId' => 'int64',
        'envTagId' => 'int64',
        'envKeyword' => null,
        'xBusinessId' => 'int64'
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
    * regionId  区域id。
    * businessId  应用id。
    * envTagId  环境标签id。
    * envKeyword  环境关键字。
    * xBusinessId  应用id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'regionId' => 'region_id',
            'businessId' => 'business_id',
            'envTagId' => 'env_tag_id',
            'envKeyword' => 'env_keyword',
            'xBusinessId' => 'x-business-id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * regionId  区域id。
    * businessId  应用id。
    * envTagId  环境标签id。
    * envKeyword  环境关键字。
    * xBusinessId  应用id。
    *
    * @var string[]
    */
    protected static $setters = [
            'regionId' => 'setRegionId',
            'businessId' => 'setBusinessId',
            'envTagId' => 'setEnvTagId',
            'envKeyword' => 'setEnvKeyword',
            'xBusinessId' => 'setXBusinessId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * regionId  区域id。
    * businessId  应用id。
    * envTagId  环境标签id。
    * envKeyword  环境关键字。
    * xBusinessId  应用id。
    *
    * @var string[]
    */
    protected static $getters = [
            'regionId' => 'getRegionId',
            'businessId' => 'getBusinessId',
            'envTagId' => 'getEnvTagId',
            'envKeyword' => 'getEnvKeyword',
            'xBusinessId' => 'getXBusinessId'
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
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['businessId'] = isset($data['businessId']) ? $data['businessId'] : null;
        $this->container['envTagId'] = isset($data['envTagId']) ? $data['envTagId'] : null;
        $this->container['envKeyword'] = isset($data['envKeyword']) ? $data['envKeyword'] : null;
        $this->container['xBusinessId'] = isset($data['xBusinessId']) ? $data['xBusinessId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['businessId'] === null) {
            $invalidProperties[] = "'businessId' can't be null";
        }
        if ($this->container['xBusinessId'] === null) {
            $invalidProperties[] = "'xBusinessId' can't be null";
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
    * Gets regionId
    *  区域id。
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 区域id。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets businessId
    *  应用id。
    *
    * @return int
    */
    public function getBusinessId()
    {
        return $this->container['businessId'];
    }

    /**
    * Sets businessId
    *
    * @param int $businessId 应用id。
    *
    * @return $this
    */
    public function setBusinessId($businessId)
    {
        $this->container['businessId'] = $businessId;
        return $this;
    }

    /**
    * Gets envTagId
    *  环境标签id。
    *
    * @return int|null
    */
    public function getEnvTagId()
    {
        return $this->container['envTagId'];
    }

    /**
    * Sets envTagId
    *
    * @param int|null $envTagId 环境标签id。
    *
    * @return $this
    */
    public function setEnvTagId($envTagId)
    {
        $this->container['envTagId'] = $envTagId;
        return $this;
    }

    /**
    * Gets envKeyword
    *  环境关键字。
    *
    * @return string|null
    */
    public function getEnvKeyword()
    {
        return $this->container['envKeyword'];
    }

    /**
    * Sets envKeyword
    *
    * @param string|null $envKeyword 环境关键字。
    *
    * @return $this
    */
    public function setEnvKeyword($envKeyword)
    {
        $this->container['envKeyword'] = $envKeyword;
        return $this;
    }

    /**
    * Gets xBusinessId
    *  应用id。
    *
    * @return int
    */
    public function getXBusinessId()
    {
        return $this->container['xBusinessId'];
    }

    /**
    * Sets xBusinessId
    *
    * @param int $xBusinessId 应用id。
    *
    * @return $this
    */
    public function setXBusinessId($xBusinessId)
    {
        $this->container['xBusinessId'] = $xBusinessId;
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

