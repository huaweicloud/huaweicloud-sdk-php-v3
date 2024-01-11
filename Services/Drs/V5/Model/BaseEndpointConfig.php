<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BaseEndpointConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BaseEndpointConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isTargetReadonly  目标实例是否设置为为只读。 - MySQL迁移和灾备，且job_direction为up时设置有效。（灾备场景下，单主灾备且本云为备为必填且为true，不填默认设置为true）。
    * nodeNum  Redis集群到GeminiDB Redis迁移场景填写，连接源端Redis集群的子任务个数，输入值在1到16之间，且输入值不能大于源端Redis集群的分片个数，请根据源端Redis集群的规模合理选择。建议集群的每4个分片设置1个源端分片个数，即每1个子任务连接源端集群的4个分片。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isTargetReadonly' => 'bool',
            'nodeNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isTargetReadonly  目标实例是否设置为为只读。 - MySQL迁移和灾备，且job_direction为up时设置有效。（灾备场景下，单主灾备且本云为备为必填且为true，不填默认设置为true）。
    * nodeNum  Redis集群到GeminiDB Redis迁移场景填写，连接源端Redis集群的子任务个数，输入值在1到16之间，且输入值不能大于源端Redis集群的分片个数，请根据源端Redis集群的规模合理选择。建议集群的每4个分片设置1个源端分片个数，即每1个子任务连接源端集群的4个分片。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isTargetReadonly' => null,
        'nodeNum' => 'int32'
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
    * isTargetReadonly  目标实例是否设置为为只读。 - MySQL迁移和灾备，且job_direction为up时设置有效。（灾备场景下，单主灾备且本云为备为必填且为true，不填默认设置为true）。
    * nodeNum  Redis集群到GeminiDB Redis迁移场景填写，连接源端Redis集群的子任务个数，输入值在1到16之间，且输入值不能大于源端Redis集群的分片个数，请根据源端Redis集群的规模合理选择。建议集群的每4个分片设置1个源端分片个数，即每1个子任务连接源端集群的4个分片。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isTargetReadonly' => 'is_target_readonly',
            'nodeNum' => 'node_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isTargetReadonly  目标实例是否设置为为只读。 - MySQL迁移和灾备，且job_direction为up时设置有效。（灾备场景下，单主灾备且本云为备为必填且为true，不填默认设置为true）。
    * nodeNum  Redis集群到GeminiDB Redis迁移场景填写，连接源端Redis集群的子任务个数，输入值在1到16之间，且输入值不能大于源端Redis集群的分片个数，请根据源端Redis集群的规模合理选择。建议集群的每4个分片设置1个源端分片个数，即每1个子任务连接源端集群的4个分片。
    *
    * @var string[]
    */
    protected static $setters = [
            'isTargetReadonly' => 'setIsTargetReadonly',
            'nodeNum' => 'setNodeNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isTargetReadonly  目标实例是否设置为为只读。 - MySQL迁移和灾备，且job_direction为up时设置有效。（灾备场景下，单主灾备且本云为备为必填且为true，不填默认设置为true）。
    * nodeNum  Redis集群到GeminiDB Redis迁移场景填写，连接源端Redis集群的子任务个数，输入值在1到16之间，且输入值不能大于源端Redis集群的分片个数，请根据源端Redis集群的规模合理选择。建议集群的每4个分片设置1个源端分片个数，即每1个子任务连接源端集群的4个分片。
    *
    * @var string[]
    */
    protected static $getters = [
            'isTargetReadonly' => 'getIsTargetReadonly',
            'nodeNum' => 'getNodeNum'
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
        $this->container['isTargetReadonly'] = isset($data['isTargetReadonly']) ? $data['isTargetReadonly'] : null;
        $this->container['nodeNum'] = isset($data['nodeNum']) ? $data['nodeNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['nodeNum']) && ($this->container['nodeNum'] > 16)) {
                $invalidProperties[] = "invalid value for 'nodeNum', must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['nodeNum']) && ($this->container['nodeNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'nodeNum', must be bigger than or equal to 1.";
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
    * Gets isTargetReadonly
    *  目标实例是否设置为为只读。 - MySQL迁移和灾备，且job_direction为up时设置有效。（灾备场景下，单主灾备且本云为备为必填且为true，不填默认设置为true）。
    *
    * @return bool|null
    */
    public function getIsTargetReadonly()
    {
        return $this->container['isTargetReadonly'];
    }

    /**
    * Sets isTargetReadonly
    *
    * @param bool|null $isTargetReadonly 目标实例是否设置为为只读。 - MySQL迁移和灾备，且job_direction为up时设置有效。（灾备场景下，单主灾备且本云为备为必填且为true，不填默认设置为true）。
    *
    * @return $this
    */
    public function setIsTargetReadonly($isTargetReadonly)
    {
        $this->container['isTargetReadonly'] = $isTargetReadonly;
        return $this;
    }

    /**
    * Gets nodeNum
    *  Redis集群到GeminiDB Redis迁移场景填写，连接源端Redis集群的子任务个数，输入值在1到16之间，且输入值不能大于源端Redis集群的分片个数，请根据源端Redis集群的规模合理选择。建议集群的每4个分片设置1个源端分片个数，即每1个子任务连接源端集群的4个分片。
    *
    * @return int|null
    */
    public function getNodeNum()
    {
        return $this->container['nodeNum'];
    }

    /**
    * Sets nodeNum
    *
    * @param int|null $nodeNum Redis集群到GeminiDB Redis迁移场景填写，连接源端Redis集群的子任务个数，输入值在1到16之间，且输入值不能大于源端Redis集群的分片个数，请根据源端Redis集群的规模合理选择。建议集群的每4个分片设置1个源端分片个数，即每1个子任务连接源端集群的4个分片。
    *
    * @return $this
    */
    public function setNodeNum($nodeNum)
    {
        $this->container['nodeNum'] = $nodeNum;
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

