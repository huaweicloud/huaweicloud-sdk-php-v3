<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateDatabaseObjectReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateDatabaseObjectReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  **参数解释**：  迁移任务ID，用于唯一标识一个数据复制任务，在查询、修改、删除等操作中作为任务的识别凭证。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
    * selected  **参数解释**：  是否进行对象选择，决定是自定义选择迁移对象还是迁移全部对象。  **约束限制**：  不涉及。  **取值范围**：  - true：自定义迁移对象，需要通过job字段指定具体迁移对象 - false：全部迁移，迁移源库所有对象  **默认取值**：  false
    * syncDatabase  **参数解释**：  是否库级同步，指定同步任务是否以库为粒度进行对象选择。  **约束限制**：  不涉及。  **取值范围**：  - true：库级同步 - false：非库级同步  **默认取值**：  不涉及
    * job  **参数解释**：  数据对象选择信息列表，包含需要迁移的数据库、表、视图等对象的详细配置。  **约束限制**：  - selected为true时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'selected' => 'bool',
            'syncDatabase' => 'bool',
            'job' => '\HuaweiCloud\SDK\Drs\V3\Model\DatabaseInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  **参数解释**：  迁移任务ID，用于唯一标识一个数据复制任务，在查询、修改、删除等操作中作为任务的识别凭证。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
    * selected  **参数解释**：  是否进行对象选择，决定是自定义选择迁移对象还是迁移全部对象。  **约束限制**：  不涉及。  **取值范围**：  - true：自定义迁移对象，需要通过job字段指定具体迁移对象 - false：全部迁移，迁移源库所有对象  **默认取值**：  false
    * syncDatabase  **参数解释**：  是否库级同步，指定同步任务是否以库为粒度进行对象选择。  **约束限制**：  不涉及。  **取值范围**：  - true：库级同步 - false：非库级同步  **默认取值**：  不涉及
    * job  **参数解释**：  数据对象选择信息列表，包含需要迁移的数据库、表、视图等对象的详细配置。  **约束限制**：  - selected为true时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'selected' => null,
        'syncDatabase' => null,
        'job' => null
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
    * jobId  **参数解释**：  迁移任务ID，用于唯一标识一个数据复制任务，在查询、修改、删除等操作中作为任务的识别凭证。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
    * selected  **参数解释**：  是否进行对象选择，决定是自定义选择迁移对象还是迁移全部对象。  **约束限制**：  不涉及。  **取值范围**：  - true：自定义迁移对象，需要通过job字段指定具体迁移对象 - false：全部迁移，迁移源库所有对象  **默认取值**：  false
    * syncDatabase  **参数解释**：  是否库级同步，指定同步任务是否以库为粒度进行对象选择。  **约束限制**：  不涉及。  **取值范围**：  - true：库级同步 - false：非库级同步  **默认取值**：  不涉及
    * job  **参数解释**：  数据对象选择信息列表，包含需要迁移的数据库、表、视图等对象的详细配置。  **约束限制**：  - selected为true时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'selected' => 'selected',
            'syncDatabase' => 'sync_database',
            'job' => 'job'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  **参数解释**：  迁移任务ID，用于唯一标识一个数据复制任务，在查询、修改、删除等操作中作为任务的识别凭证。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
    * selected  **参数解释**：  是否进行对象选择，决定是自定义选择迁移对象还是迁移全部对象。  **约束限制**：  不涉及。  **取值范围**：  - true：自定义迁移对象，需要通过job字段指定具体迁移对象 - false：全部迁移，迁移源库所有对象  **默认取值**：  false
    * syncDatabase  **参数解释**：  是否库级同步，指定同步任务是否以库为粒度进行对象选择。  **约束限制**：  不涉及。  **取值范围**：  - true：库级同步 - false：非库级同步  **默认取值**：  不涉及
    * job  **参数解释**：  数据对象选择信息列表，包含需要迁移的数据库、表、视图等对象的详细配置。  **约束限制**：  - selected为true时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'selected' => 'setSelected',
            'syncDatabase' => 'setSyncDatabase',
            'job' => 'setJob'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  **参数解释**：  迁移任务ID，用于唯一标识一个数据复制任务，在查询、修改、删除等操作中作为任务的识别凭证。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
    * selected  **参数解释**：  是否进行对象选择，决定是自定义选择迁移对象还是迁移全部对象。  **约束限制**：  不涉及。  **取值范围**：  - true：自定义迁移对象，需要通过job字段指定具体迁移对象 - false：全部迁移，迁移源库所有对象  **默认取值**：  false
    * syncDatabase  **参数解释**：  是否库级同步，指定同步任务是否以库为粒度进行对象选择。  **约束限制**：  不涉及。  **取值范围**：  - true：库级同步 - false：非库级同步  **默认取值**：  不涉及
    * job  **参数解释**：  数据对象选择信息列表，包含需要迁移的数据库、表、视图等对象的详细配置。  **约束限制**：  - selected为true时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'selected' => 'getSelected',
            'syncDatabase' => 'getSyncDatabase',
            'job' => 'getJob'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['selected'] = isset($data['selected']) ? $data['selected'] : null;
        $this->container['syncDatabase'] = isset($data['syncDatabase']) ? $data['syncDatabase'] : null;
        $this->container['job'] = isset($data['job']) ? $data['job'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
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
    * Gets jobId
    *  **参数解释**：  迁移任务ID，用于唯一标识一个数据复制任务，在查询、修改、删除等操作中作为任务的识别凭证。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
    *
    * @return string
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string $jobId **参数解释**：  迁移任务ID，用于唯一标识一个数据复制任务，在查询、修改、删除等操作中作为任务的识别凭证。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets selected
    *  **参数解释**：  是否进行对象选择，决定是自定义选择迁移对象还是迁移全部对象。  **约束限制**：  不涉及。  **取值范围**：  - true：自定义迁移对象，需要通过job字段指定具体迁移对象 - false：全部迁移，迁移源库所有对象  **默认取值**：  false
    *
    * @return bool|null
    */
    public function getSelected()
    {
        return $this->container['selected'];
    }

    /**
    * Sets selected
    *
    * @param bool|null $selected **参数解释**：  是否进行对象选择，决定是自定义选择迁移对象还是迁移全部对象。  **约束限制**：  不涉及。  **取值范围**：  - true：自定义迁移对象，需要通过job字段指定具体迁移对象 - false：全部迁移，迁移源库所有对象  **默认取值**：  false
    *
    * @return $this
    */
    public function setSelected($selected)
    {
        $this->container['selected'] = $selected;
        return $this;
    }

    /**
    * Gets syncDatabase
    *  **参数解释**：  是否库级同步，指定同步任务是否以库为粒度进行对象选择。  **约束限制**：  不涉及。  **取值范围**：  - true：库级同步 - false：非库级同步  **默认取值**：  不涉及
    *
    * @return bool|null
    */
    public function getSyncDatabase()
    {
        return $this->container['syncDatabase'];
    }

    /**
    * Sets syncDatabase
    *
    * @param bool|null $syncDatabase **参数解释**：  是否库级同步，指定同步任务是否以库为粒度进行对象选择。  **约束限制**：  不涉及。  **取值范围**：  - true：库级同步 - false：非库级同步  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setSyncDatabase($syncDatabase)
    {
        $this->container['syncDatabase'] = $syncDatabase;
        return $this;
    }

    /**
    * Gets job
    *  **参数解释**：  数据对象选择信息列表，包含需要迁移的数据库、表、视图等对象的详细配置。  **约束限制**：  - selected为true时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\DatabaseInfo[]|null
    */
    public function getJob()
    {
        return $this->container['job'];
    }

    /**
    * Sets job
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\DatabaseInfo[]|null $job **参数解释**：  数据对象选择信息列表，包含需要迁移的数据库、表、视图等对象的详细配置。  **约束限制**：  - selected为true时必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setJob($job)
    {
        $this->container['job'] = $job;
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

