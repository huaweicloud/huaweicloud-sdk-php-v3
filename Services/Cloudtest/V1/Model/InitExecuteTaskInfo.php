<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InitExecuteTaskInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InitExecuteTaskInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * releaseDev  版本信息
    * versionUri  分支/迭代uri
    * isQuery  是否只查询，不初始化（如果不存在）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'releaseDev' => 'string',
            'versionUri' => 'string',
            'isQuery' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * releaseDev  版本信息
    * versionUri  分支/迭代uri
    * isQuery  是否只查询，不初始化（如果不存在）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'releaseDev' => null,
        'versionUri' => null,
        'isQuery' => null
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
    * releaseDev  版本信息
    * versionUri  分支/迭代uri
    * isQuery  是否只查询，不初始化（如果不存在）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'releaseDev' => 'release_dev',
            'versionUri' => 'version_uri',
            'isQuery' => 'is_query'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * releaseDev  版本信息
    * versionUri  分支/迭代uri
    * isQuery  是否只查询，不初始化（如果不存在）
    *
    * @var string[]
    */
    protected static $setters = [
            'releaseDev' => 'setReleaseDev',
            'versionUri' => 'setVersionUri',
            'isQuery' => 'setIsQuery'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * releaseDev  版本信息
    * versionUri  分支/迭代uri
    * isQuery  是否只查询，不初始化（如果不存在）
    *
    * @var string[]
    */
    protected static $getters = [
            'releaseDev' => 'getReleaseDev',
            'versionUri' => 'getVersionUri',
            'isQuery' => 'getIsQuery'
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
        $this->container['releaseDev'] = isset($data['releaseDev']) ? $data['releaseDev'] : null;
        $this->container['versionUri'] = isset($data['versionUri']) ? $data['versionUri'] : null;
        $this->container['isQuery'] = isset($data['isQuery']) ? $data['isQuery'] : null;
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
    * Gets releaseDev
    *  版本信息
    *
    * @return string|null
    */
    public function getReleaseDev()
    {
        return $this->container['releaseDev'];
    }

    /**
    * Sets releaseDev
    *
    * @param string|null $releaseDev 版本信息
    *
    * @return $this
    */
    public function setReleaseDev($releaseDev)
    {
        $this->container['releaseDev'] = $releaseDev;
        return $this;
    }

    /**
    * Gets versionUri
    *  分支/迭代uri
    *
    * @return string|null
    */
    public function getVersionUri()
    {
        return $this->container['versionUri'];
    }

    /**
    * Sets versionUri
    *
    * @param string|null $versionUri 分支/迭代uri
    *
    * @return $this
    */
    public function setVersionUri($versionUri)
    {
        $this->container['versionUri'] = $versionUri;
        return $this;
    }

    /**
    * Gets isQuery
    *  是否只查询，不初始化（如果不存在）
    *
    * @return bool|null
    */
    public function getIsQuery()
    {
        return $this->container['isQuery'];
    }

    /**
    * Sets isQuery
    *
    * @param bool|null $isQuery 是否只查询，不初始化（如果不存在）
    *
    * @return $this
    */
    public function setIsQuery($isQuery)
    {
        $this->container['isQuery'] = $isQuery;
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

