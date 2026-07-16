<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SpecResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SpecResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resource  resource
    * volumes  **参数解释**：训练作业挂载卷信息。
    * logExportPath  logExportPath
    * schedulePolicy  schedulePolicy
    * customMetrics  **参数解释**：指标采集配置。
    * outputModel  outputModel
    * assetModel  assetModel
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resource' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Resource',
            'volumes' => '\HuaweiCloud\SDK\ModelArts\V1\Model\JobVolumeResp[]',
            'logExportPath' => '\HuaweiCloud\SDK\ModelArts\V1\Model\LogExportPathResp',
            'schedulePolicy' => '\HuaweiCloud\SDK\ModelArts\V1\Model\SchedulePolicyResp',
            'customMetrics' => '\HuaweiCloud\SDK\ModelArts\V1\Model\CustomMetrics[]',
            'outputModel' => '\HuaweiCloud\SDK\ModelArts\V1\Model\OutputModelResp',
            'assetModel' => '\HuaweiCloud\SDK\ModelArts\V1\Model\AssetModelResp'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resource  resource
    * volumes  **参数解释**：训练作业挂载卷信息。
    * logExportPath  logExportPath
    * schedulePolicy  schedulePolicy
    * customMetrics  **参数解释**：指标采集配置。
    * outputModel  outputModel
    * assetModel  assetModel
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resource' => null,
        'volumes' => null,
        'logExportPath' => null,
        'schedulePolicy' => null,
        'customMetrics' => null,
        'outputModel' => null,
        'assetModel' => null
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
    * volumes  **参数解释**：训练作业挂载卷信息。
    * logExportPath  logExportPath
    * schedulePolicy  schedulePolicy
    * customMetrics  **参数解释**：指标采集配置。
    * outputModel  outputModel
    * assetModel  assetModel
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resource' => 'resource',
            'volumes' => 'volumes',
            'logExportPath' => 'log_export_path',
            'schedulePolicy' => 'schedule_policy',
            'customMetrics' => 'custom_metrics',
            'outputModel' => 'output_model',
            'assetModel' => 'asset_model'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resource  resource
    * volumes  **参数解释**：训练作业挂载卷信息。
    * logExportPath  logExportPath
    * schedulePolicy  schedulePolicy
    * customMetrics  **参数解释**：指标采集配置。
    * outputModel  outputModel
    * assetModel  assetModel
    *
    * @var string[]
    */
    protected static $setters = [
            'resource' => 'setResource',
            'volumes' => 'setVolumes',
            'logExportPath' => 'setLogExportPath',
            'schedulePolicy' => 'setSchedulePolicy',
            'customMetrics' => 'setCustomMetrics',
            'outputModel' => 'setOutputModel',
            'assetModel' => 'setAssetModel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resource  resource
    * volumes  **参数解释**：训练作业挂载卷信息。
    * logExportPath  logExportPath
    * schedulePolicy  schedulePolicy
    * customMetrics  **参数解释**：指标采集配置。
    * outputModel  outputModel
    * assetModel  assetModel
    *
    * @var string[]
    */
    protected static $getters = [
            'resource' => 'getResource',
            'volumes' => 'getVolumes',
            'logExportPath' => 'getLogExportPath',
            'schedulePolicy' => 'getSchedulePolicy',
            'customMetrics' => 'getCustomMetrics',
            'outputModel' => 'getOutputModel',
            'assetModel' => 'getAssetModel'
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
        $this->container['schedulePolicy'] = isset($data['schedulePolicy']) ? $data['schedulePolicy'] : null;
        $this->container['customMetrics'] = isset($data['customMetrics']) ? $data['customMetrics'] : null;
        $this->container['outputModel'] = isset($data['outputModel']) ? $data['outputModel'] : null;
        $this->container['assetModel'] = isset($data['assetModel']) ? $data['assetModel'] : null;
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
    * Gets resource
    *  resource
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Resource|null
    */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
    * Sets resource
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Resource|null $resource resource
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
    *  **参数解释**：训练作业挂载卷信息。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\JobVolumeResp[]|null
    */
    public function getVolumes()
    {
        return $this->container['volumes'];
    }

    /**
    * Sets volumes
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\JobVolumeResp[]|null $volumes **参数解释**：训练作业挂载卷信息。
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
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\LogExportPathResp|null
    */
    public function getLogExportPath()
    {
        return $this->container['logExportPath'];
    }

    /**
    * Sets logExportPath
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\LogExportPathResp|null $logExportPath logExportPath
    *
    * @return $this
    */
    public function setLogExportPath($logExportPath)
    {
        $this->container['logExportPath'] = $logExportPath;
        return $this;
    }

    /**
    * Gets schedulePolicy
    *  schedulePolicy
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\SchedulePolicyResp|null
    */
    public function getSchedulePolicy()
    {
        return $this->container['schedulePolicy'];
    }

    /**
    * Sets schedulePolicy
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\SchedulePolicyResp|null $schedulePolicy schedulePolicy
    *
    * @return $this
    */
    public function setSchedulePolicy($schedulePolicy)
    {
        $this->container['schedulePolicy'] = $schedulePolicy;
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
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\OutputModelResp|null
    */
    public function getOutputModel()
    {
        return $this->container['outputModel'];
    }

    /**
    * Sets outputModel
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\OutputModelResp|null $outputModel outputModel
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
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\AssetModelResp|null
    */
    public function getAssetModel()
    {
        return $this->container['assetModel'];
    }

    /**
    * Sets assetModel
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\AssetModelResp|null $assetModel assetModel
    *
    * @return $this
    */
    public function setAssetModel($assetModel)
    {
        $this->container['assetModel'] = $assetModel;
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

