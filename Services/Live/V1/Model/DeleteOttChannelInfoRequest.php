<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteOttChannelInfoRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteOttChannelInfoRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessControlAllowInternal  服务鉴权Token，服务开启鉴权，必须携带Access-Control-Allow-Internal访问服务。
    * accessControlAllowExternal  服务鉴权Token，服务开启鉴权，必须携带Access-Control-Allow-External访问服务。
    * domain  推流域名
    * appName  组名或应用名
    * id  频道ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessControlAllowInternal' => 'string',
            'accessControlAllowExternal' => 'string',
            'domain' => 'string',
            'appName' => 'string',
            'id' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessControlAllowInternal  服务鉴权Token，服务开启鉴权，必须携带Access-Control-Allow-Internal访问服务。
    * accessControlAllowExternal  服务鉴权Token，服务开启鉴权，必须携带Access-Control-Allow-External访问服务。
    * domain  推流域名
    * appName  组名或应用名
    * id  频道ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessControlAllowInternal' => null,
        'accessControlAllowExternal' => null,
        'domain' => null,
        'appName' => null,
        'id' => null
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
    * accessControlAllowInternal  服务鉴权Token，服务开启鉴权，必须携带Access-Control-Allow-Internal访问服务。
    * accessControlAllowExternal  服务鉴权Token，服务开启鉴权，必须携带Access-Control-Allow-External访问服务。
    * domain  推流域名
    * appName  组名或应用名
    * id  频道ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessControlAllowInternal' => 'Access-Control-Allow-Internal',
            'accessControlAllowExternal' => 'Access-Control-Allow-External',
            'domain' => 'domain',
            'appName' => 'app_name',
            'id' => 'id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessControlAllowInternal  服务鉴权Token，服务开启鉴权，必须携带Access-Control-Allow-Internal访问服务。
    * accessControlAllowExternal  服务鉴权Token，服务开启鉴权，必须携带Access-Control-Allow-External访问服务。
    * domain  推流域名
    * appName  组名或应用名
    * id  频道ID
    *
    * @var string[]
    */
    protected static $setters = [
            'accessControlAllowInternal' => 'setAccessControlAllowInternal',
            'accessControlAllowExternal' => 'setAccessControlAllowExternal',
            'domain' => 'setDomain',
            'appName' => 'setAppName',
            'id' => 'setId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessControlAllowInternal  服务鉴权Token，服务开启鉴权，必须携带Access-Control-Allow-Internal访问服务。
    * accessControlAllowExternal  服务鉴权Token，服务开启鉴权，必须携带Access-Control-Allow-External访问服务。
    * domain  推流域名
    * appName  组名或应用名
    * id  频道ID
    *
    * @var string[]
    */
    protected static $getters = [
            'accessControlAllowInternal' => 'getAccessControlAllowInternal',
            'accessControlAllowExternal' => 'getAccessControlAllowExternal',
            'domain' => 'getDomain',
            'appName' => 'getAppName',
            'id' => 'getId'
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
        $this->container['accessControlAllowInternal'] = isset($data['accessControlAllowInternal']) ? $data['accessControlAllowInternal'] : null;
        $this->container['accessControlAllowExternal'] = isset($data['accessControlAllowExternal']) ? $data['accessControlAllowExternal'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['accessControlAllowInternal']) && (mb_strlen($this->container['accessControlAllowInternal']) > 2048)) {
                $invalidProperties[] = "invalid value for 'accessControlAllowInternal', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['accessControlAllowInternal']) && (mb_strlen($this->container['accessControlAllowInternal']) < 1)) {
                $invalidProperties[] = "invalid value for 'accessControlAllowInternal', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['accessControlAllowExternal']) && (mb_strlen($this->container['accessControlAllowExternal']) > 2048)) {
                $invalidProperties[] = "invalid value for 'accessControlAllowExternal', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['accessControlAllowExternal']) && (mb_strlen($this->container['accessControlAllowExternal']) < 1)) {
                $invalidProperties[] = "invalid value for 'accessControlAllowExternal', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
            if ((mb_strlen($this->container['domain']) > 255)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['domain']) < 1)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['appName'] === null) {
            $invalidProperties[] = "'appName' can't be null";
        }
            if ((mb_strlen($this->container['appName']) > 255)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['appName']) < 1)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 255)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
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
    * Gets accessControlAllowInternal
    *  服务鉴权Token，服务开启鉴权，必须携带Access-Control-Allow-Internal访问服务。
    *
    * @return string|null
    */
    public function getAccessControlAllowInternal()
    {
        return $this->container['accessControlAllowInternal'];
    }

    /**
    * Sets accessControlAllowInternal
    *
    * @param string|null $accessControlAllowInternal 服务鉴权Token，服务开启鉴权，必须携带Access-Control-Allow-Internal访问服务。
    *
    * @return $this
    */
    public function setAccessControlAllowInternal($accessControlAllowInternal)
    {
        $this->container['accessControlAllowInternal'] = $accessControlAllowInternal;
        return $this;
    }

    /**
    * Gets accessControlAllowExternal
    *  服务鉴权Token，服务开启鉴权，必须携带Access-Control-Allow-External访问服务。
    *
    * @return string|null
    */
    public function getAccessControlAllowExternal()
    {
        return $this->container['accessControlAllowExternal'];
    }

    /**
    * Sets accessControlAllowExternal
    *
    * @param string|null $accessControlAllowExternal 服务鉴权Token，服务开启鉴权，必须携带Access-Control-Allow-External访问服务。
    *
    * @return $this
    */
    public function setAccessControlAllowExternal($accessControlAllowExternal)
    {
        $this->container['accessControlAllowExternal'] = $accessControlAllowExternal;
        return $this;
    }

    /**
    * Gets domain
    *  推流域名
    *
    * @return string
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string $domain 推流域名
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets appName
    *  组名或应用名
    *
    * @return string
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string $appName 组名或应用名
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets id
    *  频道ID
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 频道ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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

