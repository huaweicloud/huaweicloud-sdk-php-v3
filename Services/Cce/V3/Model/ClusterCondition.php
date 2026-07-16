<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterCondition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterCondition';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释**： 状态类型。 **约束限制**： 不涉及 **取值范围**： - \"AgencyAvailable\": CCE集群自定义委托的状态。 - \"ClusterCertificate\": CCE集群证书的状态。 - \"ClusterCustomCertificate\": CCE集群自有证书的状态。 - \"CertificateRotation\": CCE集群证书更新的状态。 - \"CustomCertificateRotation\": CCE集群自有证书更新的状态。 - \"OpenIDConnectProcessing\": CCE集群开启OIDC特性处理中状态。 - \"OpenIDConnectProcessSuccess\": CCE集群开启OIDC特性成功状态。 - \"OpenIDConnectProcessFailed\": CCE集群开启OIDC特性失败状态。  **默认取值**： 不涉及
    * status  **参数解释**： Condition当前状态。 **约束限制**： 不涉及 **取值范围**： - \"True\" - \"False\"  **默认取值**： 不涉及
    * lastProbeTime  **参数解释**： 上次状态检查时间。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * lastTransitTime  **参数解释**： 上次状态变更时间。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * reason  **参数解释**： 上次状态变更原因。 **约束限制**： 不涉及 **取值范围**： - type为ClusterCertificate、ClusterCustomCertificate时取值范围：   - CertificateValid：证书状态正常   - CertificateExpiringWithin180Days：证书有效期低于180天   - CertificateExpiringWithin30Days：证书有效期低于30天   - CertificateExpired：证书已过期 - type为CertificateRotation、CustomCertificateRotation时取值范围：   - RotationInProgress：更新中   - RotationSucceeded：更新成功   - RotationFailed：更新失败  **默认取值**： 不涉及
    * message  **参数解释**： Condition详细描述。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'status' => 'string',
            'lastProbeTime' => 'string',
            'lastTransitTime' => 'string',
            'reason' => 'string',
            'message' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释**： 状态类型。 **约束限制**： 不涉及 **取值范围**： - \"AgencyAvailable\": CCE集群自定义委托的状态。 - \"ClusterCertificate\": CCE集群证书的状态。 - \"ClusterCustomCertificate\": CCE集群自有证书的状态。 - \"CertificateRotation\": CCE集群证书更新的状态。 - \"CustomCertificateRotation\": CCE集群自有证书更新的状态。 - \"OpenIDConnectProcessing\": CCE集群开启OIDC特性处理中状态。 - \"OpenIDConnectProcessSuccess\": CCE集群开启OIDC特性成功状态。 - \"OpenIDConnectProcessFailed\": CCE集群开启OIDC特性失败状态。  **默认取值**： 不涉及
    * status  **参数解释**： Condition当前状态。 **约束限制**： 不涉及 **取值范围**： - \"True\" - \"False\"  **默认取值**： 不涉及
    * lastProbeTime  **参数解释**： 上次状态检查时间。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * lastTransitTime  **参数解释**： 上次状态变更时间。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * reason  **参数解释**： 上次状态变更原因。 **约束限制**： 不涉及 **取值范围**： - type为ClusterCertificate、ClusterCustomCertificate时取值范围：   - CertificateValid：证书状态正常   - CertificateExpiringWithin180Days：证书有效期低于180天   - CertificateExpiringWithin30Days：证书有效期低于30天   - CertificateExpired：证书已过期 - type为CertificateRotation、CustomCertificateRotation时取值范围：   - RotationInProgress：更新中   - RotationSucceeded：更新成功   - RotationFailed：更新失败  **默认取值**： 不涉及
    * message  **参数解释**： Condition详细描述。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'status' => null,
        'lastProbeTime' => null,
        'lastTransitTime' => null,
        'reason' => null,
        'message' => null
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
    * type  **参数解释**： 状态类型。 **约束限制**： 不涉及 **取值范围**： - \"AgencyAvailable\": CCE集群自定义委托的状态。 - \"ClusterCertificate\": CCE集群证书的状态。 - \"ClusterCustomCertificate\": CCE集群自有证书的状态。 - \"CertificateRotation\": CCE集群证书更新的状态。 - \"CustomCertificateRotation\": CCE集群自有证书更新的状态。 - \"OpenIDConnectProcessing\": CCE集群开启OIDC特性处理中状态。 - \"OpenIDConnectProcessSuccess\": CCE集群开启OIDC特性成功状态。 - \"OpenIDConnectProcessFailed\": CCE集群开启OIDC特性失败状态。  **默认取值**： 不涉及
    * status  **参数解释**： Condition当前状态。 **约束限制**： 不涉及 **取值范围**： - \"True\" - \"False\"  **默认取值**： 不涉及
    * lastProbeTime  **参数解释**： 上次状态检查时间。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * lastTransitTime  **参数解释**： 上次状态变更时间。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * reason  **参数解释**： 上次状态变更原因。 **约束限制**： 不涉及 **取值范围**： - type为ClusterCertificate、ClusterCustomCertificate时取值范围：   - CertificateValid：证书状态正常   - CertificateExpiringWithin180Days：证书有效期低于180天   - CertificateExpiringWithin30Days：证书有效期低于30天   - CertificateExpired：证书已过期 - type为CertificateRotation、CustomCertificateRotation时取值范围：   - RotationInProgress：更新中   - RotationSucceeded：更新成功   - RotationFailed：更新失败  **默认取值**： 不涉及
    * message  **参数解释**： Condition详细描述。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'status' => 'status',
            'lastProbeTime' => 'lastProbeTime',
            'lastTransitTime' => 'lastTransitTime',
            'reason' => 'reason',
            'message' => 'message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释**： 状态类型。 **约束限制**： 不涉及 **取值范围**： - \"AgencyAvailable\": CCE集群自定义委托的状态。 - \"ClusterCertificate\": CCE集群证书的状态。 - \"ClusterCustomCertificate\": CCE集群自有证书的状态。 - \"CertificateRotation\": CCE集群证书更新的状态。 - \"CustomCertificateRotation\": CCE集群自有证书更新的状态。 - \"OpenIDConnectProcessing\": CCE集群开启OIDC特性处理中状态。 - \"OpenIDConnectProcessSuccess\": CCE集群开启OIDC特性成功状态。 - \"OpenIDConnectProcessFailed\": CCE集群开启OIDC特性失败状态。  **默认取值**： 不涉及
    * status  **参数解释**： Condition当前状态。 **约束限制**： 不涉及 **取值范围**： - \"True\" - \"False\"  **默认取值**： 不涉及
    * lastProbeTime  **参数解释**： 上次状态检查时间。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * lastTransitTime  **参数解释**： 上次状态变更时间。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * reason  **参数解释**： 上次状态变更原因。 **约束限制**： 不涉及 **取值范围**： - type为ClusterCertificate、ClusterCustomCertificate时取值范围：   - CertificateValid：证书状态正常   - CertificateExpiringWithin180Days：证书有效期低于180天   - CertificateExpiringWithin30Days：证书有效期低于30天   - CertificateExpired：证书已过期 - type为CertificateRotation、CustomCertificateRotation时取值范围：   - RotationInProgress：更新中   - RotationSucceeded：更新成功   - RotationFailed：更新失败  **默认取值**： 不涉及
    * message  **参数解释**： Condition详细描述。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'status' => 'setStatus',
            'lastProbeTime' => 'setLastProbeTime',
            'lastTransitTime' => 'setLastTransitTime',
            'reason' => 'setReason',
            'message' => 'setMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释**： 状态类型。 **约束限制**： 不涉及 **取值范围**： - \"AgencyAvailable\": CCE集群自定义委托的状态。 - \"ClusterCertificate\": CCE集群证书的状态。 - \"ClusterCustomCertificate\": CCE集群自有证书的状态。 - \"CertificateRotation\": CCE集群证书更新的状态。 - \"CustomCertificateRotation\": CCE集群自有证书更新的状态。 - \"OpenIDConnectProcessing\": CCE集群开启OIDC特性处理中状态。 - \"OpenIDConnectProcessSuccess\": CCE集群开启OIDC特性成功状态。 - \"OpenIDConnectProcessFailed\": CCE集群开启OIDC特性失败状态。  **默认取值**： 不涉及
    * status  **参数解释**： Condition当前状态。 **约束限制**： 不涉及 **取值范围**： - \"True\" - \"False\"  **默认取值**： 不涉及
    * lastProbeTime  **参数解释**： 上次状态检查时间。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * lastTransitTime  **参数解释**： 上次状态变更时间。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * reason  **参数解释**： 上次状态变更原因。 **约束限制**： 不涉及 **取值范围**： - type为ClusterCertificate、ClusterCustomCertificate时取值范围：   - CertificateValid：证书状态正常   - CertificateExpiringWithin180Days：证书有效期低于180天   - CertificateExpiringWithin30Days：证书有效期低于30天   - CertificateExpired：证书已过期 - type为CertificateRotation、CustomCertificateRotation时取值范围：   - RotationInProgress：更新中   - RotationSucceeded：更新成功   - RotationFailed：更新失败  **默认取值**： 不涉及
    * message  **参数解释**： Condition详细描述。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'status' => 'getStatus',
            'lastProbeTime' => 'getLastProbeTime',
            'lastTransitTime' => 'getLastTransitTime',
            'reason' => 'getReason',
            'message' => 'getMessage'
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
    const TYPE_AGENCY_AVAILABLE = 'AgencyAvailable';
    const TYPE_CLUSTER_CERTIFICATE = 'ClusterCertificate';
    const TYPE_CLUSTER_CUSTOM_CERTIFICATE = 'ClusterCustomCertificate';
    const TYPE_CERTIFICATE_ROTATION = 'CertificateRotation';
    const TYPE_CUSTOM_CERTIFICATE_ROTATION = 'CustomCertificateRotation';
    const TYPE_OPEN_ID_CONNECT_PROCESSING = 'OpenIDConnectProcessing';
    const TYPE_OPEN_ID_CONNECT_PROCESS_SUCCESS = 'OpenIDConnectProcessSuccess';
    const TYPE_OPEN_ID_CONNECT_PROCESS_FAILED = 'OpenIDConnectProcessFailed';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_AGENCY_AVAILABLE,
            self::TYPE_CLUSTER_CERTIFICATE,
            self::TYPE_CLUSTER_CUSTOM_CERTIFICATE,
            self::TYPE_CERTIFICATE_ROTATION,
            self::TYPE_CUSTOM_CERTIFICATE_ROTATION,
            self::TYPE_OPEN_ID_CONNECT_PROCESSING,
            self::TYPE_OPEN_ID_CONNECT_PROCESS_SUCCESS,
            self::TYPE_OPEN_ID_CONNECT_PROCESS_FAILED,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['lastProbeTime'] = isset($data['lastProbeTime']) ? $data['lastProbeTime'] : null;
        $this->container['lastTransitTime'] = isset($data['lastTransitTime']) ? $data['lastTransitTime'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets type
    *  **参数解释**： 状态类型。 **约束限制**： 不涉及 **取值范围**： - \"AgencyAvailable\": CCE集群自定义委托的状态。 - \"ClusterCertificate\": CCE集群证书的状态。 - \"ClusterCustomCertificate\": CCE集群自有证书的状态。 - \"CertificateRotation\": CCE集群证书更新的状态。 - \"CustomCertificateRotation\": CCE集群自有证书更新的状态。 - \"OpenIDConnectProcessing\": CCE集群开启OIDC特性处理中状态。 - \"OpenIDConnectProcessSuccess\": CCE集群开启OIDC特性成功状态。 - \"OpenIDConnectProcessFailed\": CCE集群开启OIDC特性失败状态。  **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**： 状态类型。 **约束限制**： 不涉及 **取值范围**： - \"AgencyAvailable\": CCE集群自定义委托的状态。 - \"ClusterCertificate\": CCE集群证书的状态。 - \"ClusterCustomCertificate\": CCE集群自有证书的状态。 - \"CertificateRotation\": CCE集群证书更新的状态。 - \"CustomCertificateRotation\": CCE集群自有证书更新的状态。 - \"OpenIDConnectProcessing\": CCE集群开启OIDC特性处理中状态。 - \"OpenIDConnectProcessSuccess\": CCE集群开启OIDC特性成功状态。 - \"OpenIDConnectProcessFailed\": CCE集群开启OIDC特性失败状态。  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： Condition当前状态。 **约束限制**： 不涉及 **取值范围**： - \"True\" - \"False\"  **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**： Condition当前状态。 **约束限制**： 不涉及 **取值范围**： - \"True\" - \"False\"  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets lastProbeTime
    *  **参数解释**： 上次状态检查时间。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getLastProbeTime()
    {
        return $this->container['lastProbeTime'];
    }

    /**
    * Sets lastProbeTime
    *
    * @param string|null $lastProbeTime **参数解释**： 上次状态检查时间。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setLastProbeTime($lastProbeTime)
    {
        $this->container['lastProbeTime'] = $lastProbeTime;
        return $this;
    }

    /**
    * Gets lastTransitTime
    *  **参数解释**： 上次状态变更时间。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getLastTransitTime()
    {
        return $this->container['lastTransitTime'];
    }

    /**
    * Sets lastTransitTime
    *
    * @param string|null $lastTransitTime **参数解释**： 上次状态变更时间。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setLastTransitTime($lastTransitTime)
    {
        $this->container['lastTransitTime'] = $lastTransitTime;
        return $this;
    }

    /**
    * Gets reason
    *  **参数解释**： 上次状态变更原因。 **约束限制**： 不涉及 **取值范围**： - type为ClusterCertificate、ClusterCustomCertificate时取值范围：   - CertificateValid：证书状态正常   - CertificateExpiringWithin180Days：证书有效期低于180天   - CertificateExpiringWithin30Days：证书有效期低于30天   - CertificateExpired：证书已过期 - type为CertificateRotation、CustomCertificateRotation时取值范围：   - RotationInProgress：更新中   - RotationSucceeded：更新成功   - RotationFailed：更新失败  **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason **参数解释**： 上次状态变更原因。 **约束限制**： 不涉及 **取值范围**： - type为ClusterCertificate、ClusterCustomCertificate时取值范围：   - CertificateValid：证书状态正常   - CertificateExpiringWithin180Days：证书有效期低于180天   - CertificateExpiringWithin30Days：证书有效期低于30天   - CertificateExpired：证书已过期 - type为CertificateRotation、CustomCertificateRotation时取值范围：   - RotationInProgress：更新中   - RotationSucceeded：更新成功   - RotationFailed：更新失败  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets message
    *  **参数解释**： Condition详细描述。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message **参数解释**： Condition详细描述。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
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

