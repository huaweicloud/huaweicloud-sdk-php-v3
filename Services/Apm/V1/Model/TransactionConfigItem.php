<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TransactionConfigItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TransactionConfigItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  配置id。
    * businessId  应用id。
    * envId  环境id。
    * method  请求方式。
    * envName  环境名称。
    * region  region显示英文名称。
    * type  类型。
    * appName  应用名称。
    * url  url地址。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'businessId' => 'int',
            'envId' => 'int',
            'method' => 'string',
            'envName' => 'string',
            'region' => 'string',
            'type' => 'string',
            'appName' => 'string',
            'url' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  配置id。
    * businessId  应用id。
    * envId  环境id。
    * method  请求方式。
    * envName  环境名称。
    * region  region显示英文名称。
    * type  类型。
    * appName  应用名称。
    * url  url地址。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'businessId' => 'int64',
        'envId' => 'int64',
        'method' => null,
        'envName' => null,
        'region' => null,
        'type' => null,
        'appName' => null,
        'url' => null
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
    * id  配置id。
    * businessId  应用id。
    * envId  环境id。
    * method  请求方式。
    * envName  环境名称。
    * region  region显示英文名称。
    * type  类型。
    * appName  应用名称。
    * url  url地址。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'businessId' => 'business_id',
            'envId' => 'env_id',
            'method' => 'method',
            'envName' => 'env_name',
            'region' => 'region',
            'type' => 'type',
            'appName' => 'app_name',
            'url' => 'url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  配置id。
    * businessId  应用id。
    * envId  环境id。
    * method  请求方式。
    * envName  环境名称。
    * region  region显示英文名称。
    * type  类型。
    * appName  应用名称。
    * url  url地址。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'businessId' => 'setBusinessId',
            'envId' => 'setEnvId',
            'method' => 'setMethod',
            'envName' => 'setEnvName',
            'region' => 'setRegion',
            'type' => 'setType',
            'appName' => 'setAppName',
            'url' => 'setUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  配置id。
    * businessId  应用id。
    * envId  环境id。
    * method  请求方式。
    * envName  环境名称。
    * region  region显示英文名称。
    * type  类型。
    * appName  应用名称。
    * url  url地址。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'businessId' => 'getBusinessId',
            'envId' => 'getEnvId',
            'method' => 'getMethod',
            'envName' => 'getEnvName',
            'region' => 'getRegion',
            'type' => 'getType',
            'appName' => 'getAppName',
            'url' => 'getUrl'
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
        $this->container['businessId'] = isset($data['businessId']) ? $data['businessId'] : null;
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['envName'] = isset($data['envName']) ? $data['envName'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
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
    * Gets id
    *  配置id。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 配置id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets businessId
    *  应用id。
    *
    * @return int|null
    */
    public function getBusinessId()
    {
        return $this->container['businessId'];
    }

    /**
    * Sets businessId
    *
    * @param int|null $businessId 应用id。
    *
    * @return $this
    */
    public function setBusinessId($businessId)
    {
        $this->container['businessId'] = $businessId;
        return $this;
    }

    /**
    * Gets envId
    *  环境id。
    *
    * @return int|null
    */
    public function getEnvId()
    {
        return $this->container['envId'];
    }

    /**
    * Sets envId
    *
    * @param int|null $envId 环境id。
    *
    * @return $this
    */
    public function setEnvId($envId)
    {
        $this->container['envId'] = $envId;
        return $this;
    }

    /**
    * Gets method
    *  请求方式。
    *
    * @return string|null
    */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
    * Sets method
    *
    * @param string|null $method 请求方式。
    *
    * @return $this
    */
    public function setMethod($method)
    {
        $this->container['method'] = $method;
        return $this;
    }

    /**
    * Gets envName
    *  环境名称。
    *
    * @return string|null
    */
    public function getEnvName()
    {
        return $this->container['envName'];
    }

    /**
    * Sets envName
    *
    * @param string|null $envName 环境名称。
    *
    * @return $this
    */
    public function setEnvName($envName)
    {
        $this->container['envName'] = $envName;
        return $this;
    }

    /**
    * Gets region
    *  region显示英文名称。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region region显示英文名称。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets type
    *  类型。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets appName
    *  应用名称。
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName 应用名称。
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets url
    *  url地址。
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url url地址。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
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

