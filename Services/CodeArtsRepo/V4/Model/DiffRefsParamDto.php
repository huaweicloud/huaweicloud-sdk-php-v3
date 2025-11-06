<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DiffRefsParamDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DiffRefsParamDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * baseSha  合并请求中原分支与目标分支的共同基准点
    * startSha  合并请求中，从共同基准点开始到原分支方向的第一个提交点
    * headSha  合并请求中原分支指向的提交点
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'baseSha' => 'string',
            'startSha' => 'string',
            'headSha' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * baseSha  合并请求中原分支与目标分支的共同基准点
    * startSha  合并请求中，从共同基准点开始到原分支方向的第一个提交点
    * headSha  合并请求中原分支指向的提交点
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'baseSha' => null,
        'startSha' => null,
        'headSha' => null
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
    * baseSha  合并请求中原分支与目标分支的共同基准点
    * startSha  合并请求中，从共同基准点开始到原分支方向的第一个提交点
    * headSha  合并请求中原分支指向的提交点
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'baseSha' => 'base_sha',
            'startSha' => 'start_sha',
            'headSha' => 'head_sha'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * baseSha  合并请求中原分支与目标分支的共同基准点
    * startSha  合并请求中，从共同基准点开始到原分支方向的第一个提交点
    * headSha  合并请求中原分支指向的提交点
    *
    * @var string[]
    */
    protected static $setters = [
            'baseSha' => 'setBaseSha',
            'startSha' => 'setStartSha',
            'headSha' => 'setHeadSha'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * baseSha  合并请求中原分支与目标分支的共同基准点
    * startSha  合并请求中，从共同基准点开始到原分支方向的第一个提交点
    * headSha  合并请求中原分支指向的提交点
    *
    * @var string[]
    */
    protected static $getters = [
            'baseSha' => 'getBaseSha',
            'startSha' => 'getStartSha',
            'headSha' => 'getHeadSha'
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
        $this->container['baseSha'] = isset($data['baseSha']) ? $data['baseSha'] : null;
        $this->container['startSha'] = isset($data['startSha']) ? $data['startSha'] : null;
        $this->container['headSha'] = isset($data['headSha']) ? $data['headSha'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['baseSha'] === null) {
            $invalidProperties[] = "'baseSha' can't be null";
        }
        if ($this->container['startSha'] === null) {
            $invalidProperties[] = "'startSha' can't be null";
        }
        if ($this->container['headSha'] === null) {
            $invalidProperties[] = "'headSha' can't be null";
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
    * Gets baseSha
    *  合并请求中原分支与目标分支的共同基准点
    *
    * @return string
    */
    public function getBaseSha()
    {
        return $this->container['baseSha'];
    }

    /**
    * Sets baseSha
    *
    * @param string $baseSha 合并请求中原分支与目标分支的共同基准点
    *
    * @return $this
    */
    public function setBaseSha($baseSha)
    {
        $this->container['baseSha'] = $baseSha;
        return $this;
    }

    /**
    * Gets startSha
    *  合并请求中，从共同基准点开始到原分支方向的第一个提交点
    *
    * @return string
    */
    public function getStartSha()
    {
        return $this->container['startSha'];
    }

    /**
    * Sets startSha
    *
    * @param string $startSha 合并请求中，从共同基准点开始到原分支方向的第一个提交点
    *
    * @return $this
    */
    public function setStartSha($startSha)
    {
        $this->container['startSha'] = $startSha;
        return $this;
    }

    /**
    * Gets headSha
    *  合并请求中原分支指向的提交点
    *
    * @return string
    */
    public function getHeadSha()
    {
        return $this->container['headSha'];
    }

    /**
    * Sets headSha
    *
    * @param string $headSha 合并请求中原分支指向的提交点
    *
    * @return $this
    */
    public function setHeadSha($headSha)
    {
        $this->container['headSha'] = $headSha;
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

