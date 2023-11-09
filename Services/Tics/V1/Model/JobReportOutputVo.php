<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobReportOutputVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobReportOutputVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ext  参数等额外信息
    * resultStorageAgentName  结果存储agent名称
    * resultStorageDomainAlias  结果存储方别名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ext' => 'string',
            'resultStorageAgentName' => 'string',
            'resultStorageDomainAlias' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ext  参数等额外信息
    * resultStorageAgentName  结果存储agent名称
    * resultStorageDomainAlias  结果存储方别名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ext' => null,
        'resultStorageAgentName' => null,
        'resultStorageDomainAlias' => null
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
    * ext  参数等额外信息
    * resultStorageAgentName  结果存储agent名称
    * resultStorageDomainAlias  结果存储方别名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ext' => 'ext',
            'resultStorageAgentName' => 'result_storage_agent_name',
            'resultStorageDomainAlias' => 'result_storage_domain_alias'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ext  参数等额外信息
    * resultStorageAgentName  结果存储agent名称
    * resultStorageDomainAlias  结果存储方别名
    *
    * @var string[]
    */
    protected static $setters = [
            'ext' => 'setExt',
            'resultStorageAgentName' => 'setResultStorageAgentName',
            'resultStorageDomainAlias' => 'setResultStorageDomainAlias'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ext  参数等额外信息
    * resultStorageAgentName  结果存储agent名称
    * resultStorageDomainAlias  结果存储方别名
    *
    * @var string[]
    */
    protected static $getters = [
            'ext' => 'getExt',
            'resultStorageAgentName' => 'getResultStorageAgentName',
            'resultStorageDomainAlias' => 'getResultStorageDomainAlias'
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
        $this->container['ext'] = isset($data['ext']) ? $data['ext'] : null;
        $this->container['resultStorageAgentName'] = isset($data['resultStorageAgentName']) ? $data['resultStorageAgentName'] : null;
        $this->container['resultStorageDomainAlias'] = isset($data['resultStorageDomainAlias']) ? $data['resultStorageDomainAlias'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['ext']) && (mb_strlen($this->container['ext']) > 1024)) {
                $invalidProperties[] = "invalid value for 'ext', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['ext']) && (mb_strlen($this->container['ext']) < 0)) {
                $invalidProperties[] = "invalid value for 'ext', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resultStorageAgentName']) && (mb_strlen($this->container['resultStorageAgentName']) > 128)) {
                $invalidProperties[] = "invalid value for 'resultStorageAgentName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resultStorageAgentName']) && (mb_strlen($this->container['resultStorageAgentName']) < 0)) {
                $invalidProperties[] = "invalid value for 'resultStorageAgentName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resultStorageDomainAlias']) && (mb_strlen($this->container['resultStorageDomainAlias']) > 128)) {
                $invalidProperties[] = "invalid value for 'resultStorageDomainAlias', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resultStorageDomainAlias']) && (mb_strlen($this->container['resultStorageDomainAlias']) < 0)) {
                $invalidProperties[] = "invalid value for 'resultStorageDomainAlias', the character length must be bigger than or equal to 0.";
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
    * Gets ext
    *  参数等额外信息
    *
    * @return string|null
    */
    public function getExt()
    {
        return $this->container['ext'];
    }

    /**
    * Sets ext
    *
    * @param string|null $ext 参数等额外信息
    *
    * @return $this
    */
    public function setExt($ext)
    {
        $this->container['ext'] = $ext;
        return $this;
    }

    /**
    * Gets resultStorageAgentName
    *  结果存储agent名称
    *
    * @return string|null
    */
    public function getResultStorageAgentName()
    {
        return $this->container['resultStorageAgentName'];
    }

    /**
    * Sets resultStorageAgentName
    *
    * @param string|null $resultStorageAgentName 结果存储agent名称
    *
    * @return $this
    */
    public function setResultStorageAgentName($resultStorageAgentName)
    {
        $this->container['resultStorageAgentName'] = $resultStorageAgentName;
        return $this;
    }

    /**
    * Gets resultStorageDomainAlias
    *  结果存储方别名
    *
    * @return string|null
    */
    public function getResultStorageDomainAlias()
    {
        return $this->container['resultStorageDomainAlias'];
    }

    /**
    * Sets resultStorageDomainAlias
    *
    * @param string|null $resultStorageDomainAlias 结果存储方别名
    *
    * @return $this
    */
    public function setResultStorageDomainAlias($resultStorageDomainAlias)
    {
        $this->container['resultStorageDomainAlias'] = $resultStorageDomainAlias;
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

