<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAlarmMetricResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAlarmMetricResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * namespace  **参数解释**： 服务指标命名空间。如：弹性云服务器的命名空间为SYS.ECS，文档数据库的命名空间为SYS.DDS，各服务的命名空间可查看：“[服务命名空间](ces_03_0059.xml)”。 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符总长度最短为3，最大为32。
    * dimensions  **参数解释**： 指标维度，目前最大为4个维度。
    * metricName  **参数解释**： 资源的监控指标名称。如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率；各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_，长度为[1,96]个字符。
    * resourceGroupId  **参数解释**： 创建告警规则时选择的资源分组ID，如：rg1603786526428bWbVmk4rP **取值范围**： 只能包含字母、数字、“-”、“_”，字符长度为[1,64]
    * resourceGroupName  **参数解释**： 创建告警规则时选择的资源分组名称，如：Resource-Group-ECS-01 **取值范围**： 字符长度为[0,128]
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'namespace' => 'string',
            'dimensions' => '\HuaweiCloud\SDK\Ces\V1\Model\DimensionResp[]',
            'metricName' => 'string',
            'resourceGroupId' => 'string',
            'resourceGroupName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * namespace  **参数解释**： 服务指标命名空间。如：弹性云服务器的命名空间为SYS.ECS，文档数据库的命名空间为SYS.DDS，各服务的命名空间可查看：“[服务命名空间](ces_03_0059.xml)”。 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符总长度最短为3，最大为32。
    * dimensions  **参数解释**： 指标维度，目前最大为4个维度。
    * metricName  **参数解释**： 资源的监控指标名称。如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率；各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_，长度为[1,96]个字符。
    * resourceGroupId  **参数解释**： 创建告警规则时选择的资源分组ID，如：rg1603786526428bWbVmk4rP **取值范围**： 只能包含字母、数字、“-”、“_”，字符长度为[1,64]
    * resourceGroupName  **参数解释**： 创建告警规则时选择的资源分组名称，如：Resource-Group-ECS-01 **取值范围**： 字符长度为[0,128]
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'namespace' => null,
        'dimensions' => null,
        'metricName' => null,
        'resourceGroupId' => null,
        'resourceGroupName' => null
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
    * namespace  **参数解释**： 服务指标命名空间。如：弹性云服务器的命名空间为SYS.ECS，文档数据库的命名空间为SYS.DDS，各服务的命名空间可查看：“[服务命名空间](ces_03_0059.xml)”。 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符总长度最短为3，最大为32。
    * dimensions  **参数解释**： 指标维度，目前最大为4个维度。
    * metricName  **参数解释**： 资源的监控指标名称。如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率；各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_，长度为[1,96]个字符。
    * resourceGroupId  **参数解释**： 创建告警规则时选择的资源分组ID，如：rg1603786526428bWbVmk4rP **取值范围**： 只能包含字母、数字、“-”、“_”，字符长度为[1,64]
    * resourceGroupName  **参数解释**： 创建告警规则时选择的资源分组名称，如：Resource-Group-ECS-01 **取值范围**： 字符长度为[0,128]
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'namespace' => 'namespace',
            'dimensions' => 'dimensions',
            'metricName' => 'metric_name',
            'resourceGroupId' => 'resource_group_id',
            'resourceGroupName' => 'resource_group_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * namespace  **参数解释**： 服务指标命名空间。如：弹性云服务器的命名空间为SYS.ECS，文档数据库的命名空间为SYS.DDS，各服务的命名空间可查看：“[服务命名空间](ces_03_0059.xml)”。 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符总长度最短为3，最大为32。
    * dimensions  **参数解释**： 指标维度，目前最大为4个维度。
    * metricName  **参数解释**： 资源的监控指标名称。如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率；各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_，长度为[1,96]个字符。
    * resourceGroupId  **参数解释**： 创建告警规则时选择的资源分组ID，如：rg1603786526428bWbVmk4rP **取值范围**： 只能包含字母、数字、“-”、“_”，字符长度为[1,64]
    * resourceGroupName  **参数解释**： 创建告警规则时选择的资源分组名称，如：Resource-Group-ECS-01 **取值范围**： 字符长度为[0,128]
    *
    * @var string[]
    */
    protected static $setters = [
            'namespace' => 'setNamespace',
            'dimensions' => 'setDimensions',
            'metricName' => 'setMetricName',
            'resourceGroupId' => 'setResourceGroupId',
            'resourceGroupName' => 'setResourceGroupName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * namespace  **参数解释**： 服务指标命名空间。如：弹性云服务器的命名空间为SYS.ECS，文档数据库的命名空间为SYS.DDS，各服务的命名空间可查看：“[服务命名空间](ces_03_0059.xml)”。 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符总长度最短为3，最大为32。
    * dimensions  **参数解释**： 指标维度，目前最大为4个维度。
    * metricName  **参数解释**： 资源的监控指标名称。如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率；各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_，长度为[1,96]个字符。
    * resourceGroupId  **参数解释**： 创建告警规则时选择的资源分组ID，如：rg1603786526428bWbVmk4rP **取值范围**： 只能包含字母、数字、“-”、“_”，字符长度为[1,64]
    * resourceGroupName  **参数解释**： 创建告警规则时选择的资源分组名称，如：Resource-Group-ECS-01 **取值范围**： 字符长度为[0,128]
    *
    * @var string[]
    */
    protected static $getters = [
            'namespace' => 'getNamespace',
            'dimensions' => 'getDimensions',
            'metricName' => 'getMetricName',
            'resourceGroupId' => 'getResourceGroupId',
            'resourceGroupName' => 'getResourceGroupName'
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
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['metricName'] = isset($data['metricName']) ? $data['metricName'] : null;
        $this->container['resourceGroupId'] = isset($data['resourceGroupId']) ? $data['resourceGroupId'] : null;
        $this->container['resourceGroupName'] = isset($data['resourceGroupName']) ? $data['resourceGroupName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 32)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 0)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['namespace']) && !preg_match("/^((([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*)|)$/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /^((([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*)|)$/.";
            }
            if (!is_null($this->container['metricName']) && (mb_strlen($this->container['metricName']) > 96)) {
                $invalidProperties[] = "invalid value for 'metricName', the character length must be smaller than or equal to 96.";
            }
            if (!is_null($this->container['metricName']) && (mb_strlen($this->container['metricName']) < 1)) {
                $invalidProperties[] = "invalid value for 'metricName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['metricName']) && !preg_match("/^([A-Za-z]){1}([0-9A-Za-z]|_|-)*$/", $this->container['metricName'])) {
                $invalidProperties[] = "invalid value for 'metricName', must be conform to the pattern /^([A-Za-z]){1}([0-9A-Za-z]|_|-)*$/.";
            }
            if (!is_null($this->container['resourceGroupId']) && (mb_strlen($this->container['resourceGroupId']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceGroupId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceGroupId']) && (mb_strlen($this->container['resourceGroupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceGroupId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceGroupId']) && !preg_match("/^([a-z]|[A-Z]|[0-9]|_|-)*$/", $this->container['resourceGroupId'])) {
                $invalidProperties[] = "invalid value for 'resourceGroupId', must be conform to the pattern /^([a-z]|[A-Z]|[0-9]|_|-)*$/.";
            }
            if (!is_null($this->container['resourceGroupName']) && (mb_strlen($this->container['resourceGroupName']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceGroupName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceGroupName']) && (mb_strlen($this->container['resourceGroupName']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceGroupName', the character length must be bigger than or equal to 0.";
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
    * Gets namespace
    *  **参数解释**： 服务指标命名空间。如：弹性云服务器的命名空间为SYS.ECS，文档数据库的命名空间为SYS.DDS，各服务的命名空间可查看：“[服务命名空间](ces_03_0059.xml)”。 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符总长度最短为3，最大为32。
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace **参数解释**： 服务指标命名空间。如：弹性云服务器的命名空间为SYS.ECS，文档数据库的命名空间为SYS.DDS，各服务的命名空间可查看：“[服务命名空间](ces_03_0059.xml)”。 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符总长度最短为3，最大为32。
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets dimensions
    *  **参数解释**： 指标维度，目前最大为4个维度。
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\DimensionResp[]|null
    */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
    * Sets dimensions
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\DimensionResp[]|null $dimensions **参数解释**： 指标维度，目前最大为4个维度。
    *
    * @return $this
    */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;
        return $this;
    }

    /**
    * Gets metricName
    *  **参数解释**： 资源的监控指标名称。如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率；各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_，长度为[1,96]个字符。
    *
    * @return string|null
    */
    public function getMetricName()
    {
        return $this->container['metricName'];
    }

    /**
    * Sets metricName
    *
    * @param string|null $metricName **参数解释**： 资源的监控指标名称。如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率；各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_，长度为[1,96]个字符。
    *
    * @return $this
    */
    public function setMetricName($metricName)
    {
        $this->container['metricName'] = $metricName;
        return $this;
    }

    /**
    * Gets resourceGroupId
    *  **参数解释**： 创建告警规则时选择的资源分组ID，如：rg1603786526428bWbVmk4rP **取值范围**： 只能包含字母、数字、“-”、“_”，字符长度为[1,64]
    *
    * @return string|null
    */
    public function getResourceGroupId()
    {
        return $this->container['resourceGroupId'];
    }

    /**
    * Sets resourceGroupId
    *
    * @param string|null $resourceGroupId **参数解释**： 创建告警规则时选择的资源分组ID，如：rg1603786526428bWbVmk4rP **取值范围**： 只能包含字母、数字、“-”、“_”，字符长度为[1,64]
    *
    * @return $this
    */
    public function setResourceGroupId($resourceGroupId)
    {
        $this->container['resourceGroupId'] = $resourceGroupId;
        return $this;
    }

    /**
    * Gets resourceGroupName
    *  **参数解释**： 创建告警规则时选择的资源分组名称，如：Resource-Group-ECS-01 **取值范围**： 字符长度为[0,128]
    *
    * @return string|null
    */
    public function getResourceGroupName()
    {
        return $this->container['resourceGroupName'];
    }

    /**
    * Sets resourceGroupName
    *
    * @param string|null $resourceGroupName **参数解释**： 创建告警规则时选择的资源分组名称，如：Resource-Group-ECS-01 **取值范围**： 字符长度为[0,128]
    *
    * @return $this
    */
    public function setResourceGroupName($resourceGroupName)
    {
        $this->container['resourceGroupName'] = $resourceGroupName;
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

