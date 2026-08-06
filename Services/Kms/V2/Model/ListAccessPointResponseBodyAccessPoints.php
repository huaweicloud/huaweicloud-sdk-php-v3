<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAccessPointResponseBodyAccessPoints implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAccessPointResponseBody_access_points';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessPointId  **参数解释：** 接入点ID **取值范围：** 不涉及
    * keyspaceId  **参数解释：** 密钥空间ID **取值范围：** 不涉及
    * accessPointName  **参数解释：** 接入点名称 **取值范围：** 不涉及
    * state  **参数解释：** 接入点状态 **取值范围：** 0:禁用，1：启用
    * type  **参数解释：** 接入点类型 **取值范围：** 1:ECS，2：CCE，3：Custom
    * createdBy  **参数解释：** 接入点创建人 **取值范围：** 不涉及
    * createTime  **参数解释：** 接入点创建时间 **取值范围：** 不涉及
    * lsatModifyTime  **参数解释：** 接入点最近更新时间 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessPointId' => 'string',
            'keyspaceId' => 'string',
            'accessPointName' => 'string',
            'state' => 'int',
            'type' => 'int',
            'createdBy' => 'string',
            'createTime' => 'string',
            'lsatModifyTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessPointId  **参数解释：** 接入点ID **取值范围：** 不涉及
    * keyspaceId  **参数解释：** 密钥空间ID **取值范围：** 不涉及
    * accessPointName  **参数解释：** 接入点名称 **取值范围：** 不涉及
    * state  **参数解释：** 接入点状态 **取值范围：** 0:禁用，1：启用
    * type  **参数解释：** 接入点类型 **取值范围：** 1:ECS，2：CCE，3：Custom
    * createdBy  **参数解释：** 接入点创建人 **取值范围：** 不涉及
    * createTime  **参数解释：** 接入点创建时间 **取值范围：** 不涉及
    * lsatModifyTime  **参数解释：** 接入点最近更新时间 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessPointId' => null,
        'keyspaceId' => null,
        'accessPointName' => null,
        'state' => 'int32',
        'type' => 'int32',
        'createdBy' => null,
        'createTime' => null,
        'lsatModifyTime' => null
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
    * accessPointId  **参数解释：** 接入点ID **取值范围：** 不涉及
    * keyspaceId  **参数解释：** 密钥空间ID **取值范围：** 不涉及
    * accessPointName  **参数解释：** 接入点名称 **取值范围：** 不涉及
    * state  **参数解释：** 接入点状态 **取值范围：** 0:禁用，1：启用
    * type  **参数解释：** 接入点类型 **取值范围：** 1:ECS，2：CCE，3：Custom
    * createdBy  **参数解释：** 接入点创建人 **取值范围：** 不涉及
    * createTime  **参数解释：** 接入点创建时间 **取值范围：** 不涉及
    * lsatModifyTime  **参数解释：** 接入点最近更新时间 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessPointId' => 'access_point_id',
            'keyspaceId' => 'keyspace_id',
            'accessPointName' => 'access_point_name',
            'state' => 'state',
            'type' => 'type',
            'createdBy' => 'created_by',
            'createTime' => 'create_time',
            'lsatModifyTime' => 'lsat_modify_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessPointId  **参数解释：** 接入点ID **取值范围：** 不涉及
    * keyspaceId  **参数解释：** 密钥空间ID **取值范围：** 不涉及
    * accessPointName  **参数解释：** 接入点名称 **取值范围：** 不涉及
    * state  **参数解释：** 接入点状态 **取值范围：** 0:禁用，1：启用
    * type  **参数解释：** 接入点类型 **取值范围：** 1:ECS，2：CCE，3：Custom
    * createdBy  **参数解释：** 接入点创建人 **取值范围：** 不涉及
    * createTime  **参数解释：** 接入点创建时间 **取值范围：** 不涉及
    * lsatModifyTime  **参数解释：** 接入点最近更新时间 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'accessPointId' => 'setAccessPointId',
            'keyspaceId' => 'setKeyspaceId',
            'accessPointName' => 'setAccessPointName',
            'state' => 'setState',
            'type' => 'setType',
            'createdBy' => 'setCreatedBy',
            'createTime' => 'setCreateTime',
            'lsatModifyTime' => 'setLsatModifyTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessPointId  **参数解释：** 接入点ID **取值范围：** 不涉及
    * keyspaceId  **参数解释：** 密钥空间ID **取值范围：** 不涉及
    * accessPointName  **参数解释：** 接入点名称 **取值范围：** 不涉及
    * state  **参数解释：** 接入点状态 **取值范围：** 0:禁用，1：启用
    * type  **参数解释：** 接入点类型 **取值范围：** 1:ECS，2：CCE，3：Custom
    * createdBy  **参数解释：** 接入点创建人 **取值范围：** 不涉及
    * createTime  **参数解释：** 接入点创建时间 **取值范围：** 不涉及
    * lsatModifyTime  **参数解释：** 接入点最近更新时间 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'accessPointId' => 'getAccessPointId',
            'keyspaceId' => 'getKeyspaceId',
            'accessPointName' => 'getAccessPointName',
            'state' => 'getState',
            'type' => 'getType',
            'createdBy' => 'getCreatedBy',
            'createTime' => 'getCreateTime',
            'lsatModifyTime' => 'getLsatModifyTime'
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
        $this->container['accessPointId'] = isset($data['accessPointId']) ? $data['accessPointId'] : null;
        $this->container['keyspaceId'] = isset($data['keyspaceId']) ? $data['keyspaceId'] : null;
        $this->container['accessPointName'] = isset($data['accessPointName']) ? $data['accessPointName'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['lsatModifyTime'] = isset($data['lsatModifyTime']) ? $data['lsatModifyTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['accessPointId'] === null) {
            $invalidProperties[] = "'accessPointId' can't be null";
        }
        if ($this->container['keyspaceId'] === null) {
            $invalidProperties[] = "'keyspaceId' can't be null";
        }
        if ($this->container['accessPointName'] === null) {
            $invalidProperties[] = "'accessPointName' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['createdBy'] === null) {
            $invalidProperties[] = "'createdBy' can't be null";
        }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['lsatModifyTime'] === null) {
            $invalidProperties[] = "'lsatModifyTime' can't be null";
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
    * Gets accessPointId
    *  **参数解释：** 接入点ID **取值范围：** 不涉及
    *
    * @return string
    */
    public function getAccessPointId()
    {
        return $this->container['accessPointId'];
    }

    /**
    * Sets accessPointId
    *
    * @param string $accessPointId **参数解释：** 接入点ID **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setAccessPointId($accessPointId)
    {
        $this->container['accessPointId'] = $accessPointId;
        return $this;
    }

    /**
    * Gets keyspaceId
    *  **参数解释：** 密钥空间ID **取值范围：** 不涉及
    *
    * @return string
    */
    public function getKeyspaceId()
    {
        return $this->container['keyspaceId'];
    }

    /**
    * Sets keyspaceId
    *
    * @param string $keyspaceId **参数解释：** 密钥空间ID **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setKeyspaceId($keyspaceId)
    {
        $this->container['keyspaceId'] = $keyspaceId;
        return $this;
    }

    /**
    * Gets accessPointName
    *  **参数解释：** 接入点名称 **取值范围：** 不涉及
    *
    * @return string
    */
    public function getAccessPointName()
    {
        return $this->container['accessPointName'];
    }

    /**
    * Sets accessPointName
    *
    * @param string $accessPointName **参数解释：** 接入点名称 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setAccessPointName($accessPointName)
    {
        $this->container['accessPointName'] = $accessPointName;
        return $this;
    }

    /**
    * Gets state
    *  **参数解释：** 接入点状态 **取值范围：** 0:禁用，1：启用
    *
    * @return int
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param int $state **参数解释：** 接入点状态 **取值范围：** 0:禁用，1：启用
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 接入点类型 **取值范围：** 1:ECS，2：CCE，3：Custom
    *
    * @return int
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int $type **参数解释：** 接入点类型 **取值范围：** 1:ECS，2：CCE，3：Custom
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets createdBy
    *  **参数解释：** 接入点创建人 **取值范围：** 不涉及
    *
    * @return string
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string $createdBy **参数解释：** 接入点创建人 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释：** 接入点创建时间 **取值范围：** 不涉及
    *
    * @return string
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string $createTime **参数解释：** 接入点创建时间 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets lsatModifyTime
    *  **参数解释：** 接入点最近更新时间 **取值范围：** 不涉及
    *
    * @return string
    */
    public function getLsatModifyTime()
    {
        return $this->container['lsatModifyTime'];
    }

    /**
    * Sets lsatModifyTime
    *
    * @param string $lsatModifyTime **参数解释：** 接入点最近更新时间 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setLsatModifyTime($lsatModifyTime)
    {
        $this->container['lsatModifyTime'] = $lsatModifyTime;
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

