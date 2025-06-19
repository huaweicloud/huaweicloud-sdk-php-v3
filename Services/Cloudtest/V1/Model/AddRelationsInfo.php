<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddRelationsInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddRelationsInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * relations  relations
    * trackerId  工作项类型id
    * versionUri  版本uri
    * taskUri  测试套id
    * addToIterator  是否将需求添加到迭代
    * projectUuid  项目id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'relations' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\RelationInfo[]',
            'trackerId' => 'string',
            'versionUri' => 'string',
            'taskUri' => 'string',
            'addToIterator' => 'bool',
            'projectUuid' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * relations  relations
    * trackerId  工作项类型id
    * versionUri  版本uri
    * taskUri  测试套id
    * addToIterator  是否将需求添加到迭代
    * projectUuid  项目id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'relations' => null,
        'trackerId' => null,
        'versionUri' => null,
        'taskUri' => null,
        'addToIterator' => null,
        'projectUuid' => null
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
    * relations  relations
    * trackerId  工作项类型id
    * versionUri  版本uri
    * taskUri  测试套id
    * addToIterator  是否将需求添加到迭代
    * projectUuid  项目id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'relations' => 'relations',
            'trackerId' => 'tracker_id',
            'versionUri' => 'version_uri',
            'taskUri' => 'task_uri',
            'addToIterator' => 'add_to_iterator',
            'projectUuid' => 'project_uuid'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * relations  relations
    * trackerId  工作项类型id
    * versionUri  版本uri
    * taskUri  测试套id
    * addToIterator  是否将需求添加到迭代
    * projectUuid  项目id
    *
    * @var string[]
    */
    protected static $setters = [
            'relations' => 'setRelations',
            'trackerId' => 'setTrackerId',
            'versionUri' => 'setVersionUri',
            'taskUri' => 'setTaskUri',
            'addToIterator' => 'setAddToIterator',
            'projectUuid' => 'setProjectUuid'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * relations  relations
    * trackerId  工作项类型id
    * versionUri  版本uri
    * taskUri  测试套id
    * addToIterator  是否将需求添加到迭代
    * projectUuid  项目id
    *
    * @var string[]
    */
    protected static $getters = [
            'relations' => 'getRelations',
            'trackerId' => 'getTrackerId',
            'versionUri' => 'getVersionUri',
            'taskUri' => 'getTaskUri',
            'addToIterator' => 'getAddToIterator',
            'projectUuid' => 'getProjectUuid'
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
        $this->container['relations'] = isset($data['relations']) ? $data['relations'] : null;
        $this->container['trackerId'] = isset($data['trackerId']) ? $data['trackerId'] : null;
        $this->container['versionUri'] = isset($data['versionUri']) ? $data['versionUri'] : null;
        $this->container['taskUri'] = isset($data['taskUri']) ? $data['taskUri'] : null;
        $this->container['addToIterator'] = isset($data['addToIterator']) ? $data['addToIterator'] : null;
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
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
    * Gets relations
    *  relations
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\RelationInfo[]|null
    */
    public function getRelations()
    {
        return $this->container['relations'];
    }

    /**
    * Sets relations
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\RelationInfo[]|null $relations relations
    *
    * @return $this
    */
    public function setRelations($relations)
    {
        $this->container['relations'] = $relations;
        return $this;
    }

    /**
    * Gets trackerId
    *  工作项类型id
    *
    * @return string|null
    */
    public function getTrackerId()
    {
        return $this->container['trackerId'];
    }

    /**
    * Sets trackerId
    *
    * @param string|null $trackerId 工作项类型id
    *
    * @return $this
    */
    public function setTrackerId($trackerId)
    {
        $this->container['trackerId'] = $trackerId;
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
    * Gets taskUri
    *  测试套id
    *
    * @return string|null
    */
    public function getTaskUri()
    {
        return $this->container['taskUri'];
    }

    /**
    * Sets taskUri
    *
    * @param string|null $taskUri 测试套id
    *
    * @return $this
    */
    public function setTaskUri($taskUri)
    {
        $this->container['taskUri'] = $taskUri;
        return $this;
    }

    /**
    * Gets addToIterator
    *  是否将需求添加到迭代
    *
    * @return bool|null
    */
    public function getAddToIterator()
    {
        return $this->container['addToIterator'];
    }

    /**
    * Sets addToIterator
    *
    * @param bool|null $addToIterator 是否将需求添加到迭代
    *
    * @return $this
    */
    public function setAddToIterator($addToIterator)
    {
        $this->container['addToIterator'] = $addToIterator;
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

