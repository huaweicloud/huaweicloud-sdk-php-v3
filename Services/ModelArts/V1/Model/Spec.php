<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Spec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Spec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resource  resource
    * volumes  **参数解释**：训练作业挂载卷信息。 **约束限制**：不涉及。
    * logExportPath  logExportPath
    * autoStop  autoStop
    * schedulePolicy  schedulePolicy
    * logExportConfig  logExportConfig
    * notification  notification
    * customMetrics  **参数解释**：指标采集配置。
    * outputModel  outputModel
    * assetModel  assetModel
    * assetId  **参数解释**：精调训练作业资产模型ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resource' => '\HuaweiCloud\SDK\ModelArts\V1\Model\SpecResource',
            'volumes' => '\HuaweiCloud\SDK\ModelArts\V1\Model\SpecVolumes[]',
            'logExportPath' => '\HuaweiCloud\SDK\ModelArts\V1\Model\LogExportPath',
            'autoStop' => '\HuaweiCloud\SDK\ModelArts\V1\Model\AutoStop',
            'schedulePolicy' => '\HuaweiCloud\SDK\ModelArts\V1\Model\SchedulePolicy',
            'logExportConfig' => '\HuaweiCloud\SDK\ModelArts\V1\Model\LogExportConfig',
            'notification' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Notification',
            'customMetrics' => '\HuaweiCloud\SDK\ModelArts\V1\Model\CustomMetrics[]',
            'outputModel' => '\HuaweiCloud\SDK\ModelArts\V1\Model\OutputModel',
            'assetModel' => '\HuaweiCloud\SDK\ModelArts\V1\Model\AssetModel',
            'assetId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resource  resource
    * volumes  **参数解释**：训练作业挂载卷信息。 **约束限制**：不涉及。
    * logExportPath  logExportPath
    * autoStop  autoStop
    * schedulePolicy  schedulePolicy
    * logExportConfig  logExportConfig
    * notification  notification
    * customMetrics  **参数解释**：指标采集配置。
    * outputModel  outputModel
    * assetModel  assetModel
    * assetId  **参数解释**：精调训练作业资产模型ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resource' => null,
        'volumes' => null,
        'logExportPath' => null,
        'autoStop' => null,
        'schedulePolicy' => null,
        'logExportConfig' => null,
        'notification' => null,
        'customMetrics' => null,
        'outputModel' => null,
        'assetModel' => null,
        'assetId' => null
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
    * resource  resource
    * volumes  **参数解释**：训练作业挂载卷信息。 **约束限制**：不涉及。
    * logExportPath  logExportPath
    * autoStop  autoStop
    * schedulePolicy  schedulePolicy
    * logExportConfig  logExportConfig
    * notification  notification
    * customMetrics  **参数解释**：指标采集配置。
    * outputModel  outputModel
    * assetModel  assetModel
    * assetId  **参数解释**：精调训练作业资产模型ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resource' => 'resource',
            'volumes' => 'volumes',
            'logExportPath' => 'log_export_path',
            'autoStop' => 'auto_stop',
            'schedulePolicy' => 'schedule_policy',
            'logExportConfig' => 'log_export_config',
            'notification' => 'notification',
            'customMetrics' => 'custom_metrics',
            'outputModel' => 'output_model',
            'assetModel' => 'asset_model',
            'assetId' => 'asset_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resource  resource
    * volumes  **参数解释**：训练作业挂载卷信息。 **约束限制**：不涉及。
    * logExportPath  logExportPath
    * autoStop  autoStop
    * schedulePolicy  schedulePolicy
    * logExportConfig  logExportConfig
    * notification  notification
    * customMetrics  **参数解释**：指标采集配置。
    * outputModel  outputModel
    * assetModel  assetModel
    * assetId  **参数解释**：精调训练作业资产模型ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'resource' => 'setResource',
            'volumes' => 'setVolumes',
            'logExportPath' => 'setLogExportPath',
            'autoStop' => 'setAutoStop',
            'schedulePolicy' => 'setSchedulePolicy',
            'logExportConfig' => 'setLogExportConfig',
            'notification' => 'setNotification',
            'customMetrics' => 'setCustomMetrics',
            'outputModel' => 'setOutputModel',
            'assetModel' => 'setAssetModel',
            'assetId' => 'setAssetId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resource  resource
    * volumes  **参数解释**：训练作业挂载卷信息。 **约束限制**：不涉及。
    * logExportPath  logExportPath
    * autoStop  autoStop
    * schedulePolicy  schedulePolicy
    * logExportConfig  logExportConfig
    * notification  notification
    * customMetrics  **参数解释**：指标采集配置。
    * outputModel  outputModel
    * assetModel  assetModel
    * assetId  **参数解释**：精调训练作业资产模型ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'resource' => 'getResource',
            'volumes' => 'getVolumes',
            'logExportPath' => 'getLogExportPath',
            'autoStop' => 'getAutoStop',
            'schedulePolicy' => 'getSchedulePolicy',
            'logExportConfig' => 'getLogExportConfig',
            'notification' => 'getNotification',
            'customMetrics' => 'getCustomMetrics',
            'outputModel' => 'getOutputModel',
            'assetModel' => 'getAssetModel',
            'assetId' => 'getAssetId'
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
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
        $this->container['volumes'] = isset($data['volumes']) ? $data['volumes'] : null;
        $this->container['logExportPath'] = isset($data['logExportPath']) ? $data['logExportPath'] : null;
        $this->container['autoStop'] = isset($data['autoStop']) ? $data['autoStop'] : null;
        $this->container['schedulePolicy'] = isset($data['schedulePolicy']) ? $data['schedulePolicy'] : null;
        $this->container['logExportConfig'] = isset($data['logExportConfig']) ? $data['logExportConfig'] : null;
        $this->container['notification'] = isset($data['notification']) ? $data['notification'] : null;
        $this->container['customMetrics'] = isset($data['customMetrics']) ? $data['customMetrics'] : null;
        $this->container['outputModel'] = isset($data['outputModel']) ? $data['outputModel'] : null;
        $this->container['assetModel'] = isset($data['assetModel']) ? $data['assetModel'] : null;
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) > 100)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be bigger than or equal to 1.";
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
    * Gets resource
    *  resource
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\SpecResource|null
    */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
    * Sets resource
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\SpecResource|null $resource resource
    *
    * @return $this
    */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;
        return $this;
    }

    /**
    * Gets volumes
    *  **参数解释**：训练作业挂载卷信息。 **约束限制**：不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\SpecVolumes[]|null
    */
    public function getVolumes()
    {
        return $this->container['volumes'];
    }

    /**
    * Sets volumes
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\SpecVolumes[]|null $volumes **参数解释**：训练作业挂载卷信息。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setVolumes($volumes)
    {
        $this->container['volumes'] = $volumes;
        return $this;
    }

    /**
    * Gets logExportPath
    *  logExportPath
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\LogExportPath|null
    */
    public function getLogExportPath()
    {
        return $this->container['logExportPath'];
    }

    /**
    * Sets logExportPath
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\LogExportPath|null $logExportPath logExportPath
    *
    * @return $this
    */
    public function setLogExportPath($logExportPath)
    {
        $this->container['logExportPath'] = $logExportPath;
        return $this;
    }

    /**
    * Gets autoStop
    *  autoStop
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\AutoStop|null
    */
    public function getAutoStop()
    {
        return $this->container['autoStop'];
    }

    /**
    * Sets autoStop
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\AutoStop|null $autoStop autoStop
    *
    * @return $this
    */
    public function setAutoStop($autoStop)
    {
        $this->container['autoStop'] = $autoStop;
        return $this;
    }

    /**
    * Gets schedulePolicy
    *  schedulePolicy
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\SchedulePolicy|null
    */
    public function getSchedulePolicy()
    {
        return $this->container['schedulePolicy'];
    }

    /**
    * Sets schedulePolicy
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\SchedulePolicy|null $schedulePolicy schedulePolicy
    *
    * @return $this
    */
    public function setSchedulePolicy($schedulePolicy)
    {
        $this->container['schedulePolicy'] = $schedulePolicy;
        return $this;
    }

    /**
    * Gets logExportConfig
    *  logExportConfig
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\LogExportConfig|null
    */
    public function getLogExportConfig()
    {
        return $this->container['logExportConfig'];
    }

    /**
    * Sets logExportConfig
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\LogExportConfig|null $logExportConfig logExportConfig
    *
    * @return $this
    */
    public function setLogExportConfig($logExportConfig)
    {
        $this->container['logExportConfig'] = $logExportConfig;
        return $this;
    }

    /**
    * Gets notification
    *  notification
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Notification|null
    */
    public function getNotification()
    {
        return $this->container['notification'];
    }

    /**
    * Sets notification
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Notification|null $notification notification
    *
    * @return $this
    */
    public function setNotification($notification)
    {
        $this->container['notification'] = $notification;
        return $this;
    }

    /**
    * Gets customMetrics
    *  **参数解释**：指标采集配置。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\CustomMetrics[]|null
    */
    public function getCustomMetrics()
    {
        return $this->container['customMetrics'];
    }

    /**
    * Sets customMetrics
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\CustomMetrics[]|null $customMetrics **参数解释**：指标采集配置。
    *
    * @return $this
    */
    public function setCustomMetrics($customMetrics)
    {
        $this->container['customMetrics'] = $customMetrics;
        return $this;
    }

    /**
    * Gets outputModel
    *  outputModel
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\OutputModel|null
    */
    public function getOutputModel()
    {
        return $this->container['outputModel'];
    }

    /**
    * Sets outputModel
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\OutputModel|null $outputModel outputModel
    *
    * @return $this
    */
    public function setOutputModel($outputModel)
    {
        $this->container['outputModel'] = $outputModel;
        return $this;
    }

    /**
    * Gets assetModel
    *  assetModel
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\AssetModel|null
    */
    public function getAssetModel()
    {
        return $this->container['assetModel'];
    }

    /**
    * Sets assetModel
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\AssetModel|null $assetModel assetModel
    *
    * @return $this
    */
    public function setAssetModel($assetModel)
    {
        $this->container['assetModel'] = $assetModel;
        return $this;
    }

    /**
    * Gets assetId
    *  **参数解释**：精调训练作业资产模型ID。
    *
    * @return string|null
    */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
    * Sets assetId
    *
    * @param string|null $assetId **参数解释**：精调训练作业资产模型ID。
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
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

