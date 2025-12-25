<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EsMonitorBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EsMonitorBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  租户ID
    * projectId  项目ID
    * workspaceId  工作空间ID
    * dataspaceId  数据空间ID
    * pipeId  管道ID
    * storageBytes  存储字节数
    * storageCount  存储条数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'projectId' => 'string',
            'workspaceId' => 'string',
            'dataspaceId' => 'string',
            'pipeId' => 'string',
            'storageBytes' => 'int',
            'storageCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  租户ID
    * projectId  项目ID
    * workspaceId  工作空间ID
    * dataspaceId  数据空间ID
    * pipeId  管道ID
    * storageBytes  存储字节数
    * storageCount  存储条数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'projectId' => null,
        'workspaceId' => null,
        'dataspaceId' => null,
        'pipeId' => null,
        'storageBytes' => 'int64',
        'storageCount' => 'int64'
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
    * domainId  租户ID
    * projectId  项目ID
    * workspaceId  工作空间ID
    * dataspaceId  数据空间ID
    * pipeId  管道ID
    * storageBytes  存储字节数
    * storageCount  存储条数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'projectId' => 'project_id',
            'workspaceId' => 'workspace_id',
            'dataspaceId' => 'dataspace_id',
            'pipeId' => 'pipe_id',
            'storageBytes' => 'storage_bytes',
            'storageCount' => 'storage_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  租户ID
    * projectId  项目ID
    * workspaceId  工作空间ID
    * dataspaceId  数据空间ID
    * pipeId  管道ID
    * storageBytes  存储字节数
    * storageCount  存储条数
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'projectId' => 'setProjectId',
            'workspaceId' => 'setWorkspaceId',
            'dataspaceId' => 'setDataspaceId',
            'pipeId' => 'setPipeId',
            'storageBytes' => 'setStorageBytes',
            'storageCount' => 'setStorageCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  租户ID
    * projectId  项目ID
    * workspaceId  工作空间ID
    * dataspaceId  数据空间ID
    * pipeId  管道ID
    * storageBytes  存储字节数
    * storageCount  存储条数
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'projectId' => 'getProjectId',
            'workspaceId' => 'getWorkspaceId',
            'dataspaceId' => 'getDataspaceId',
            'pipeId' => 'getPipeId',
            'storageBytes' => 'getStorageBytes',
            'storageCount' => 'getStorageCount'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['dataspaceId'] = isset($data['dataspaceId']) ? $data['dataspaceId'] : null;
        $this->container['pipeId'] = isset($data['pipeId']) ? $data['pipeId'] : null;
        $this->container['storageBytes'] = isset($data['storageBytes']) ? $data['storageBytes'] : null;
        $this->container['storageCount'] = isset($data['storageCount']) ? $data['storageCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 36)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['dataspaceId']) && (mb_strlen($this->container['dataspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'dataspaceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['dataspaceId']) && (mb_strlen($this->container['dataspaceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'dataspaceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['pipeId']) && (mb_strlen($this->container['pipeId']) > 36)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['pipeId']) && (mb_strlen($this->container['pipeId']) < 0)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['storageBytes']) && ($this->container['storageBytes'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'storageBytes', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['storageBytes']) && ($this->container['storageBytes'] < 0)) {
                $invalidProperties[] = "invalid value for 'storageBytes', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['storageCount']) && ($this->container['storageCount'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'storageCount', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['storageCount']) && ($this->container['storageCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'storageCount', must be bigger than or equal to 0.";
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
    * Gets domainId
    *  租户ID
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 租户ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间ID
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 工作空间ID
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets dataspaceId
    *  数据空间ID
    *
    * @return string|null
    */
    public function getDataspaceId()
    {
        return $this->container['dataspaceId'];
    }

    /**
    * Sets dataspaceId
    *
    * @param string|null $dataspaceId 数据空间ID
    *
    * @return $this
    */
    public function setDataspaceId($dataspaceId)
    {
        $this->container['dataspaceId'] = $dataspaceId;
        return $this;
    }

    /**
    * Gets pipeId
    *  管道ID
    *
    * @return string|null
    */
    public function getPipeId()
    {
        return $this->container['pipeId'];
    }

    /**
    * Sets pipeId
    *
    * @param string|null $pipeId 管道ID
    *
    * @return $this
    */
    public function setPipeId($pipeId)
    {
        $this->container['pipeId'] = $pipeId;
        return $this;
    }

    /**
    * Gets storageBytes
    *  存储字节数
    *
    * @return int|null
    */
    public function getStorageBytes()
    {
        return $this->container['storageBytes'];
    }

    /**
    * Sets storageBytes
    *
    * @param int|null $storageBytes 存储字节数
    *
    * @return $this
    */
    public function setStorageBytes($storageBytes)
    {
        $this->container['storageBytes'] = $storageBytes;
        return $this;
    }

    /**
    * Gets storageCount
    *  存储条数
    *
    * @return int|null
    */
    public function getStorageCount()
    {
        return $this->container['storageCount'];
    }

    /**
    * Sets storageCount
    *
    * @param int|null $storageCount 存储条数
    *
    * @return $this
    */
    public function setStorageCount($storageCount)
    {
        $this->container['storageCount'] = $storageCount;
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

