<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GitRepositorySpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GitRepositorySpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * url  Git仓库地址
    * ref  ref
    * secretRef  secretRef
    * interval  周期性检查仓库更新的时间间隔，格式如 \"1m\" 表示1分钟
    * timeout  Git 操作（如克隆）的超时时间，默认60秒
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'url' => 'string',
            'ref' => '\HuaweiCloud\SDK\Ucs\V1\Model\GitRepositoryRef',
            'secretRef' => '\HuaweiCloud\SDK\Ucs\V1\Model\LocalObjectReference',
            'interval' => 'string',
            'timeout' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * url  Git仓库地址
    * ref  ref
    * secretRef  secretRef
    * interval  周期性检查仓库更新的时间间隔，格式如 \"1m\" 表示1分钟
    * timeout  Git 操作（如克隆）的超时时间，默认60秒
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'url' => null,
        'ref' => null,
        'secretRef' => null,
        'interval' => null,
        'timeout' => null
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
    * url  Git仓库地址
    * ref  ref
    * secretRef  secretRef
    * interval  周期性检查仓库更新的时间间隔，格式如 \"1m\" 表示1分钟
    * timeout  Git 操作（如克隆）的超时时间，默认60秒
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'url' => 'url',
            'ref' => 'ref',
            'secretRef' => 'secretRef',
            'interval' => 'interval',
            'timeout' => 'timeout'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * url  Git仓库地址
    * ref  ref
    * secretRef  secretRef
    * interval  周期性检查仓库更新的时间间隔，格式如 \"1m\" 表示1分钟
    * timeout  Git 操作（如克隆）的超时时间，默认60秒
    *
    * @var string[]
    */
    protected static $setters = [
            'url' => 'setUrl',
            'ref' => 'setRef',
            'secretRef' => 'setSecretRef',
            'interval' => 'setInterval',
            'timeout' => 'setTimeout'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * url  Git仓库地址
    * ref  ref
    * secretRef  secretRef
    * interval  周期性检查仓库更新的时间间隔，格式如 \"1m\" 表示1分钟
    * timeout  Git 操作（如克隆）的超时时间，默认60秒
    *
    * @var string[]
    */
    protected static $getters = [
            'url' => 'getUrl',
            'ref' => 'getRef',
            'secretRef' => 'getSecretRef',
            'interval' => 'getInterval',
            'timeout' => 'getTimeout'
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['ref'] = isset($data['ref']) ? $data['ref'] : null;
        $this->container['secretRef'] = isset($data['secretRef']) ? $data['secretRef'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
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
    * Gets url
    *  Git仓库地址
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
    * @param string|null $url Git仓库地址
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets ref
    *  ref
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\GitRepositoryRef|null
    */
    public function getRef()
    {
        return $this->container['ref'];
    }

    /**
    * Sets ref
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\GitRepositoryRef|null $ref ref
    *
    * @return $this
    */
    public function setRef($ref)
    {
        $this->container['ref'] = $ref;
        return $this;
    }

    /**
    * Gets secretRef
    *  secretRef
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\LocalObjectReference|null
    */
    public function getSecretRef()
    {
        return $this->container['secretRef'];
    }

    /**
    * Sets secretRef
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\LocalObjectReference|null $secretRef secretRef
    *
    * @return $this
    */
    public function setSecretRef($secretRef)
    {
        $this->container['secretRef'] = $secretRef;
        return $this;
    }

    /**
    * Gets interval
    *  周期性检查仓库更新的时间间隔，格式如 \"1m\" 表示1分钟
    *
    * @return string|null
    */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
    * Sets interval
    *
    * @param string|null $interval 周期性检查仓库更新的时间间隔，格式如 \"1m\" 表示1分钟
    *
    * @return $this
    */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;
        return $this;
    }

    /**
    * Gets timeout
    *  Git 操作（如克隆）的超时时间，默认60秒
    *
    * @return string|null
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param string|null $timeout Git 操作（如克隆）的超时时间，默认60秒
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
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

