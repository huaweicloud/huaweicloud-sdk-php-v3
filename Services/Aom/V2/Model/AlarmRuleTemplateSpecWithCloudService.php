<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmRuleTemplateSpecWithCloudService implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmRuleTemplateSpecWithCloudService';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * relatedCloudService  关联的云服务。
    * relatedCceClusters  关联的CCE集群。
    * relatedPrometheusInstances  关联的Prom实例。
    * alarmNotification  alarmNotification
    * alarmTemplateSpecItems  告警模板列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'relatedCloudService' => 'string',
            'relatedCceClusters' => 'string[]',
            'relatedPrometheusInstances' => 'string[]',
            'alarmNotification' => '\HuaweiCloud\SDK\Aom\V2\Model\AlarmNotification',
            'alarmTemplateSpecItems' => '\HuaweiCloud\SDK\Aom\V2\Model\AlarmTemplateSpecItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * relatedCloudService  关联的云服务。
    * relatedCceClusters  关联的CCE集群。
    * relatedPrometheusInstances  关联的Prom实例。
    * alarmNotification  alarmNotification
    * alarmTemplateSpecItems  告警模板列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'relatedCloudService' => null,
        'relatedCceClusters' => null,
        'relatedPrometheusInstances' => null,
        'alarmNotification' => null,
        'alarmTemplateSpecItems' => null
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
    * relatedCloudService  关联的云服务。
    * relatedCceClusters  关联的CCE集群。
    * relatedPrometheusInstances  关联的Prom实例。
    * alarmNotification  alarmNotification
    * alarmTemplateSpecItems  告警模板列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'relatedCloudService' => 'related_cloud_service',
            'relatedCceClusters' => 'related_cce_clusters',
            'relatedPrometheusInstances' => 'related_prometheus_instances',
            'alarmNotification' => 'alarm_notification',
            'alarmTemplateSpecItems' => 'alarm_template_spec_items'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * relatedCloudService  关联的云服务。
    * relatedCceClusters  关联的CCE集群。
    * relatedPrometheusInstances  关联的Prom实例。
    * alarmNotification  alarmNotification
    * alarmTemplateSpecItems  告警模板列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'relatedCloudService' => 'setRelatedCloudService',
            'relatedCceClusters' => 'setRelatedCceClusters',
            'relatedPrometheusInstances' => 'setRelatedPrometheusInstances',
            'alarmNotification' => 'setAlarmNotification',
            'alarmTemplateSpecItems' => 'setAlarmTemplateSpecItems'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * relatedCloudService  关联的云服务。
    * relatedCceClusters  关联的CCE集群。
    * relatedPrometheusInstances  关联的Prom实例。
    * alarmNotification  alarmNotification
    * alarmTemplateSpecItems  告警模板列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'relatedCloudService' => 'getRelatedCloudService',
            'relatedCceClusters' => 'getRelatedCceClusters',
            'relatedPrometheusInstances' => 'getRelatedPrometheusInstances',
            'alarmNotification' => 'getAlarmNotification',
            'alarmTemplateSpecItems' => 'getAlarmTemplateSpecItems'
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
        $this->container['relatedCloudService'] = isset($data['relatedCloudService']) ? $data['relatedCloudService'] : null;
        $this->container['relatedCceClusters'] = isset($data['relatedCceClusters']) ? $data['relatedCceClusters'] : null;
        $this->container['relatedPrometheusInstances'] = isset($data['relatedPrometheusInstances']) ? $data['relatedPrometheusInstances'] : null;
        $this->container['alarmNotification'] = isset($data['alarmNotification']) ? $data['alarmNotification'] : null;
        $this->container['alarmTemplateSpecItems'] = isset($data['alarmTemplateSpecItems']) ? $data['alarmTemplateSpecItems'] : null;
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
    * Gets relatedCloudService
    *  关联的云服务。
    *
    * @return string|null
    */
    public function getRelatedCloudService()
    {
        return $this->container['relatedCloudService'];
    }

    /**
    * Sets relatedCloudService
    *
    * @param string|null $relatedCloudService 关联的云服务。
    *
    * @return $this
    */
    public function setRelatedCloudService($relatedCloudService)
    {
        $this->container['relatedCloudService'] = $relatedCloudService;
        return $this;
    }

    /**
    * Gets relatedCceClusters
    *  关联的CCE集群。
    *
    * @return string[]|null
    */
    public function getRelatedCceClusters()
    {
        return $this->container['relatedCceClusters'];
    }

    /**
    * Sets relatedCceClusters
    *
    * @param string[]|null $relatedCceClusters 关联的CCE集群。
    *
    * @return $this
    */
    public function setRelatedCceClusters($relatedCceClusters)
    {
        $this->container['relatedCceClusters'] = $relatedCceClusters;
        return $this;
    }

    /**
    * Gets relatedPrometheusInstances
    *  关联的Prom实例。
    *
    * @return string[]|null
    */
    public function getRelatedPrometheusInstances()
    {
        return $this->container['relatedPrometheusInstances'];
    }

    /**
    * Sets relatedPrometheusInstances
    *
    * @param string[]|null $relatedPrometheusInstances 关联的Prom实例。
    *
    * @return $this
    */
    public function setRelatedPrometheusInstances($relatedPrometheusInstances)
    {
        $this->container['relatedPrometheusInstances'] = $relatedPrometheusInstances;
        return $this;
    }

    /**
    * Gets alarmNotification
    *  alarmNotification
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\AlarmNotification|null
    */
    public function getAlarmNotification()
    {
        return $this->container['alarmNotification'];
    }

    /**
    * Sets alarmNotification
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\AlarmNotification|null $alarmNotification alarmNotification
    *
    * @return $this
    */
    public function setAlarmNotification($alarmNotification)
    {
        $this->container['alarmNotification'] = $alarmNotification;
        return $this;
    }

    /**
    * Gets alarmTemplateSpecItems
    *  告警模板列表。
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\AlarmTemplateSpecItem[]|null
    */
    public function getAlarmTemplateSpecItems()
    {
        return $this->container['alarmTemplateSpecItems'];
    }

    /**
    * Sets alarmTemplateSpecItems
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\AlarmTemplateSpecItem[]|null $alarmTemplateSpecItems 告警模板列表。
    *
    * @return $this
    */
    public function setAlarmTemplateSpecItems($alarmTemplateSpecItems)
    {
        $this->container['alarmTemplateSpecItems'] = $alarmTemplateSpecItems;
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

