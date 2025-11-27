<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTasksRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTasksRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * state  迁移任务状态 READY:准备就绪 RUNNING:迁移中 SYNCING:同步中 MIGRATE_SUCCESS:迁移成功 MIGRATE_FAIL:迁移失败 ABORTING:中止中 ABORT:中止 DELETING::删除中 SYNC_F_ROLLBACKING:同步失败回滚中 SYNC_F_ROLLBACK_SUCCESS:同步失败回滚成功
    * name  任务的名称
    * id  任务的ID
    * sourceServerId  源端服务器的ID
    * limit  每一页记录的任务数量
    * offset  偏移量
    * enterpriseProjectId  需要查询的企业项目ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'state' => 'string',
            'name' => 'string',
            'id' => 'string',
            'sourceServerId' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * state  迁移任务状态 READY:准备就绪 RUNNING:迁移中 SYNCING:同步中 MIGRATE_SUCCESS:迁移成功 MIGRATE_FAIL:迁移失败 ABORTING:中止中 ABORT:中止 DELETING::删除中 SYNC_F_ROLLBACKING:同步失败回滚中 SYNC_F_ROLLBACK_SUCCESS:同步失败回滚成功
    * name  任务的名称
    * id  任务的ID
    * sourceServerId  源端服务器的ID
    * limit  每一页记录的任务数量
    * offset  偏移量
    * enterpriseProjectId  需要查询的企业项目ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'state' => null,
        'name' => null,
        'id' => null,
        'sourceServerId' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'enterpriseProjectId' => null
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
    * state  迁移任务状态 READY:准备就绪 RUNNING:迁移中 SYNCING:同步中 MIGRATE_SUCCESS:迁移成功 MIGRATE_FAIL:迁移失败 ABORTING:中止中 ABORT:中止 DELETING::删除中 SYNC_F_ROLLBACKING:同步失败回滚中 SYNC_F_ROLLBACK_SUCCESS:同步失败回滚成功
    * name  任务的名称
    * id  任务的ID
    * sourceServerId  源端服务器的ID
    * limit  每一页记录的任务数量
    * offset  偏移量
    * enterpriseProjectId  需要查询的企业项目ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'state' => 'state',
            'name' => 'name',
            'id' => 'id',
            'sourceServerId' => 'source_server_id',
            'limit' => 'limit',
            'offset' => 'offset',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * state  迁移任务状态 READY:准备就绪 RUNNING:迁移中 SYNCING:同步中 MIGRATE_SUCCESS:迁移成功 MIGRATE_FAIL:迁移失败 ABORTING:中止中 ABORT:中止 DELETING::删除中 SYNC_F_ROLLBACKING:同步失败回滚中 SYNC_F_ROLLBACK_SUCCESS:同步失败回滚成功
    * name  任务的名称
    * id  任务的ID
    * sourceServerId  源端服务器的ID
    * limit  每一页记录的任务数量
    * offset  偏移量
    * enterpriseProjectId  需要查询的企业项目ID
    *
    * @var string[]
    */
    protected static $setters = [
            'state' => 'setState',
            'name' => 'setName',
            'id' => 'setId',
            'sourceServerId' => 'setSourceServerId',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * state  迁移任务状态 READY:准备就绪 RUNNING:迁移中 SYNCING:同步中 MIGRATE_SUCCESS:迁移成功 MIGRATE_FAIL:迁移失败 ABORTING:中止中 ABORT:中止 DELETING::删除中 SYNC_F_ROLLBACKING:同步失败回滚中 SYNC_F_ROLLBACK_SUCCESS:同步失败回滚成功
    * name  任务的名称
    * id  任务的ID
    * sourceServerId  源端服务器的ID
    * limit  每一页记录的任务数量
    * offset  偏移量
    * enterpriseProjectId  需要查询的企业项目ID
    *
    * @var string[]
    */
    protected static $getters = [
            'state' => 'getState',
            'name' => 'getName',
            'id' => 'getId',
            'sourceServerId' => 'getSourceServerId',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
    const STATE_READY = 'READY';
    const STATE_RUNNING = 'RUNNING';
    const STATE_SYNCING = 'SYNCING';
    const STATE_MIGRATE_SUCCESS = 'MIGRATE_SUCCESS';
    const STATE_MIGRATE_FAIL = 'MIGRATE_FAIL';
    const STATE_ABORTING = 'ABORTING';
    const STATE_ABORT = 'ABORT';
    const STATE_DELETING = 'DELETING';
    const STATE_SYNC_F_ROLLBACKING = 'SYNC_F_ROLLBACKING';
    const STATE_SYNC_F_ROLLBACK_SUCCESS = 'SYNC_F_ROLLBACK_SUCCESS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_READY,
            self::STATE_RUNNING,
            self::STATE_SYNCING,
            self::STATE_MIGRATE_SUCCESS,
            self::STATE_MIGRATE_FAIL,
            self::STATE_ABORTING,
            self::STATE_ABORT,
            self::STATE_DELETING,
            self::STATE_SYNC_F_ROLLBACKING,
            self::STATE_SYNC_F_ROLLBACK_SUCCESS,
        ];
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
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['sourceServerId'] = isset($data['sourceServerId']) ? $data['sourceServerId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sourceServerId']) && (mb_strlen($this->container['sourceServerId']) > 36)) {
                $invalidProperties[] = "invalid value for 'sourceServerId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['sourceServerId']) && (mb_strlen($this->container['sourceServerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'sourceServerId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 65535)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 255)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
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
    * Gets state
    *  迁移任务状态 READY:准备就绪 RUNNING:迁移中 SYNCING:同步中 MIGRATE_SUCCESS:迁移成功 MIGRATE_FAIL:迁移失败 ABORTING:中止中 ABORT:中止 DELETING::删除中 SYNC_F_ROLLBACKING:同步失败回滚中 SYNC_F_ROLLBACK_SUCCESS:同步失败回滚成功
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 迁移任务状态 READY:准备就绪 RUNNING:迁移中 SYNCING:同步中 MIGRATE_SUCCESS:迁移成功 MIGRATE_FAIL:迁移失败 ABORTING:中止中 ABORT:中止 DELETING::删除中 SYNC_F_ROLLBACKING:同步失败回滚中 SYNC_F_ROLLBACK_SUCCESS:同步失败回滚成功
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets name
    *  任务的名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 任务的名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets id
    *  任务的ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 任务的ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets sourceServerId
    *  源端服务器的ID
    *
    * @return string|null
    */
    public function getSourceServerId()
    {
        return $this->container['sourceServerId'];
    }

    /**
    * Sets sourceServerId
    *
    * @param string|null $sourceServerId 源端服务器的ID
    *
    * @return $this
    */
    public function setSourceServerId($sourceServerId)
    {
        $this->container['sourceServerId'] = $sourceServerId;
        return $this;
    }

    /**
    * Gets limit
    *  每一页记录的任务数量
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每一页记录的任务数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  需要查询的企业项目ID
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 需要查询的企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

