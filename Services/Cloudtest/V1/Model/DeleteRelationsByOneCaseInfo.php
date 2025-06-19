<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteRelationsByOneCaseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteRelationsByOneCaseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workItemIds  workItemIds
    * projectUuid  项目id
    * versionUri  版本uri
    * relateType  关联关系类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workItemIds' => 'string[]',
            'projectUuid' => 'string',
            'versionUri' => 'string',
            'relateType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workItemIds  workItemIds
    * projectUuid  项目id
    * versionUri  版本uri
    * relateType  关联关系类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workItemIds' => null,
        'projectUuid' => null,
        'versionUri' => null,
        'relateType' => null
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
    * workItemIds  workItemIds
    * projectUuid  项目id
    * versionUri  版本uri
    * relateType  关联关系类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workItemIds' => 'work_item_ids',
            'projectUuid' => 'project_uuid',
            'versionUri' => 'version_uri',
            'relateType' => 'relate_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workItemIds  workItemIds
    * projectUuid  项目id
    * versionUri  版本uri
    * relateType  关联关系类型
    *
    * @var string[]
    */
    protected static $setters = [
            'workItemIds' => 'setWorkItemIds',
            'projectUuid' => 'setProjectUuid',
            'versionUri' => 'setVersionUri',
            'relateType' => 'setRelateType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workItemIds  workItemIds
    * projectUuid  项目id
    * versionUri  版本uri
    * relateType  关联关系类型
    *
    * @var string[]
    */
    protected static $getters = [
            'workItemIds' => 'getWorkItemIds',
            'projectUuid' => 'getProjectUuid',
            'versionUri' => 'getVersionUri',
            'relateType' => 'getRelateType'
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
        $this->container['workItemIds'] = isset($data['workItemIds']) ? $data['workItemIds'] : null;
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
        $this->container['versionUri'] = isset($data['versionUri']) ? $data['versionUri'] : null;
        $this->container['relateType'] = isset($data['relateType']) ? $data['relateType'] : null;
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
    * Gets workItemIds
    *  workItemIds
    *
    * @return string[]|null
    */
    public function getWorkItemIds()
    {
        return $this->container['workItemIds'];
    }

    /**
    * Sets workItemIds
    *
    * @param string[]|null $workItemIds workItemIds
    *
    * @return $this
    */
    public function setWorkItemIds($workItemIds)
    {
        $this->container['workItemIds'] = $workItemIds;
        return $this;
    }

    /**
    * Gets projectUuid
    *  项目id
    *
    * @return string|null
    */
    public function getProjectUuid()
    {
        return $this->container['projectUuid'];
    }

    /**
    * Sets projectUuid
    *
    * @param string|null $projectUuid 项目id
    *
    * @return $this
    */
    public function setProjectUuid($projectUuid)
    {
        $this->container['projectUuid'] = $projectUuid;
        return $this;
    }

    /**
    * Gets versionUri
    *  版本uri
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
    * @param string|null $versionUri 版本uri
    *
    * @return $this
    */
    public function setVersionUri($versionUri)
    {
        $this->container['versionUri'] = $versionUri;
        return $this;
    }

    /**
    * Gets relateType
    *  关联关系类型
    *
    * @return string|null
    */
    public function getRelateType()
    {
        return $this->container['relateType'];
    }

    /**
    * Sets relateType
    *
    * @param string|null $relateType 关联关系类型
    *
    * @return $this
    */
    public function setRelateType($relateType)
    {
        $this->container['relateType'] = $relateType;
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

