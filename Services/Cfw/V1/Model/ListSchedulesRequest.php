<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSchedulesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSchedulesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  **参数解释**： 项目ID，用于明确项目归属，配置后可通过该ID查询项目下资产，可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * objectId  **参数解释**： 防护对象ID，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志ID，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象ID，type为1的为VPC边界防护对象ID。 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * name  **参数解释**： 时间表名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * desc  **参数解释**： 时间表描述 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * limit  **参数解释**： 查询返回记录的数量限制 **约束限制**： 不涉及 **取值范围**： 1-1024 **默认取值**： 不涉及
    * offset  **参数解释**： 偏移量，表示查询该偏移量后面的记录 **约束限制**： 不涉及 **取值范围**： 0 - 1024 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'objectId' => 'string',
            'name' => 'string',
            'desc' => 'string',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  **参数解释**： 项目ID，用于明确项目归属，配置后可通过该ID查询项目下资产，可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * objectId  **参数解释**： 防护对象ID，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志ID，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象ID，type为1的为VPC边界防护对象ID。 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * name  **参数解释**： 时间表名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * desc  **参数解释**： 时间表描述 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * limit  **参数解释**： 查询返回记录的数量限制 **约束限制**： 不涉及 **取值范围**： 1-1024 **默认取值**： 不涉及
    * offset  **参数解释**： 偏移量，表示查询该偏移量后面的记录 **约束限制**： 不涉及 **取值范围**： 0 - 1024 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'objectId' => null,
        'name' => null,
        'desc' => null,
        'limit' => 'int32',
        'offset' => 'int32'
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
    * projectId  **参数解释**： 项目ID，用于明确项目归属，配置后可通过该ID查询项目下资产，可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * objectId  **参数解释**： 防护对象ID，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志ID，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象ID，type为1的为VPC边界防护对象ID。 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * name  **参数解释**： 时间表名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * desc  **参数解释**： 时间表描述 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * limit  **参数解释**： 查询返回记录的数量限制 **约束限制**： 不涉及 **取值范围**： 1-1024 **默认取值**： 不涉及
    * offset  **参数解释**： 偏移量，表示查询该偏移量后面的记录 **约束限制**： 不涉及 **取值范围**： 0 - 1024 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'objectId' => 'object_id',
            'name' => 'name',
            'desc' => 'desc',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  **参数解释**： 项目ID，用于明确项目归属，配置后可通过该ID查询项目下资产，可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * objectId  **参数解释**： 防护对象ID，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志ID，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象ID，type为1的为VPC边界防护对象ID。 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * name  **参数解释**： 时间表名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * desc  **参数解释**： 时间表描述 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * limit  **参数解释**： 查询返回记录的数量限制 **约束限制**： 不涉及 **取值范围**： 1-1024 **默认取值**： 不涉及
    * offset  **参数解释**： 偏移量，表示查询该偏移量后面的记录 **约束限制**： 不涉及 **取值范围**： 0 - 1024 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'objectId' => 'setObjectId',
            'name' => 'setName',
            'desc' => 'setDesc',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  **参数解释**： 项目ID，用于明确项目归属，配置后可通过该ID查询项目下资产，可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * objectId  **参数解释**： 防护对象ID，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志ID，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象ID，type为1的为VPC边界防护对象ID。 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * name  **参数解释**： 时间表名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * desc  **参数解释**： 时间表描述 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * limit  **参数解释**： 查询返回记录的数量限制 **约束限制**： 不涉及 **取值范围**： 1-1024 **默认取值**： 不涉及
    * offset  **参数解释**： 偏移量，表示查询该偏移量后面的记录 **约束限制**： 不涉及 **取值范围**： 0 - 1024 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'objectId' => 'getObjectId',
            'name' => 'getName',
            'desc' => 'getDesc',
            'limit' => 'getLimit',
            'offset' => 'getOffset'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['objectId'] === null) {
            $invalidProperties[] = "'objectId' can't be null";
        }
            if (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/", $this->container['objectId'])) {
                $invalidProperties[] = "invalid value for 'objectId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[^<>]{0,255}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[^<>]{0,255}$/.";
            }
            if (!is_null($this->container['desc']) && !preg_match("/^[^<>]{0,255}$/", $this->container['desc'])) {
                $invalidProperties[] = "invalid value for 'desc', must be conform to the pattern /^[^<>]{0,255}$/.";
            }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 1024)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1024.";
            }
            if (($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
            if (($this->container['offset'] > 1024)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 1024.";
            }
            if (($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
    * Gets projectId
    *  **参数解释**： 项目ID，用于明确项目归属，配置后可通过该ID查询项目下资产，可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId **参数解释**： 项目ID，用于明确项目归属，配置后可通过该ID查询项目下资产，可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets objectId
    *  **参数解释**： 防护对象ID，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志ID，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象ID，type为1的为VPC边界防护对象ID。 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @return string
    */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
    * Sets objectId
    *
    * @param string $objectId **参数解释**： 防护对象ID，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志ID，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象ID，type为1的为VPC边界防护对象ID。 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setObjectId($objectId)
    {
        $this->container['objectId'] = $objectId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 时间表名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
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
    * @param string|null $name **参数解释**： 时间表名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets desc
    *  **参数解释**： 时间表描述 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc **参数解释**： 时间表描述 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**： 查询返回记录的数量限制 **约束限制**： 不涉及 **取值范围**： 1-1024 **默认取值**： 不涉及
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit **参数解释**： 查询返回记录的数量限制 **约束限制**： 不涉及 **取值范围**： 1-1024 **默认取值**： 不涉及
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
    *  **参数解释**： 偏移量，表示查询该偏移量后面的记录 **约束限制**： 不涉及 **取值范围**： 0 - 1024 **默认取值**： 不涉及
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset **参数解释**： 偏移量，表示查询该偏移量后面的记录 **约束限制**： 不涉及 **取值范围**： 0 - 1024 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

