<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiAuthCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiAuthCreate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * envId  需要授权的环境编号
    * appIds  APP的编号列表
    * apiIds  API的编号列表[，可以选择租户自己的API，也可以选择从云商店上购买的API](tag:hws)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'envId' => 'string',
            'appIds' => 'string[]',
            'apiIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * envId  需要授权的环境编号
    * appIds  APP的编号列表
    * apiIds  API的编号列表[，可以选择租户自己的API，也可以选择从云商店上购买的API](tag:hws)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'envId' => null,
        'appIds' => null,
        'apiIds' => null
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
    * envId  需要授权的环境编号
    * appIds  APP的编号列表
    * apiIds  API的编号列表[，可以选择租户自己的API，也可以选择从云商店上购买的API](tag:hws)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'envId' => 'env_id',
            'appIds' => 'app_ids',
            'apiIds' => 'api_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * envId  需要授权的环境编号
    * appIds  APP的编号列表
    * apiIds  API的编号列表[，可以选择租户自己的API，也可以选择从云商店上购买的API](tag:hws)。
    *
    * @var string[]
    */
    protected static $setters = [
            'envId' => 'setEnvId',
            'appIds' => 'setAppIds',
            'apiIds' => 'setApiIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * envId  需要授权的环境编号
    * appIds  APP的编号列表
    * apiIds  API的编号列表[，可以选择租户自己的API，也可以选择从云商店上购买的API](tag:hws)。
    *
    * @var string[]
    */
    protected static $getters = [
            'envId' => 'getEnvId',
            'appIds' => 'getAppIds',
            'apiIds' => 'getApiIds'
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
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
        $this->container['appIds'] = isset($data['appIds']) ? $data['appIds'] : null;
        $this->container['apiIds'] = isset($data['apiIds']) ? $data['apiIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['envId'] === null) {
            $invalidProperties[] = "'envId' can't be null";
        }
        if ($this->container['appIds'] === null) {
            $invalidProperties[] = "'appIds' can't be null";
        }
        if ($this->container['apiIds'] === null) {
            $invalidProperties[] = "'apiIds' can't be null";
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
    * Gets envId
    *  需要授权的环境编号
    *
    * @return string
    */
    public function getEnvId()
    {
        return $this->container['envId'];
    }

    /**
    * Sets envId
    *
    * @param string $envId 需要授权的环境编号
    *
    * @return $this
    */
    public function setEnvId($envId)
    {
        $this->container['envId'] = $envId;
        return $this;
    }

    /**
    * Gets appIds
    *  APP的编号列表
    *
    * @return string[]
    */
    public function getAppIds()
    {
        return $this->container['appIds'];
    }

    /**
    * Sets appIds
    *
    * @param string[] $appIds APP的编号列表
    *
    * @return $this
    */
    public function setAppIds($appIds)
    {
        $this->container['appIds'] = $appIds;
        return $this;
    }

    /**
    * Gets apiIds
    *  API的编号列表[，可以选择租户自己的API，也可以选择从云商店上购买的API](tag:hws)。
    *
    * @return string[]
    */
    public function getApiIds()
    {
        return $this->container['apiIds'];
    }

    /**
    * Sets apiIds
    *
    * @param string[] $apiIds API的编号列表[，可以选择租户自己的API，也可以选择从云商店上购买的API](tag:hws)。
    *
    * @return $this
    */
    public function setApiIds($apiIds)
    {
        $this->container['apiIds'] = $apiIds;
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

