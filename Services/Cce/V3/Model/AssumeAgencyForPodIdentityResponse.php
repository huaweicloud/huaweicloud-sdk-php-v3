<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssumeAgencyForPodIdentityResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssumeAgencyForPodIdentityResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assumedAgency  assumedAgency
    * audience  **参数解释：** 凭据签发时传入的audience属性，通过pod-identity关联获取委托凭据的场景下，该值固定为 service.cce.pods。 该属性只在pod-identity关联绑定信任委托时返回 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * credentials  credentials
    * podIdentityAssociationId  **参数解释：** 委托凭据所属的pod-identity关联id。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subject  subject
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assumedAgency' => '\HuaweiCloud\SDK\Cce\V3\Model\AssumedAgency',
            'audience' => 'string',
            'credentials' => '\HuaweiCloud\SDK\Cce\V3\Model\Credentials',
            'podIdentityAssociationId' => 'string',
            'subject' => '\HuaweiCloud\SDK\Cce\V3\Model\PodIdentitySubject'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assumedAgency  assumedAgency
    * audience  **参数解释：** 凭据签发时传入的audience属性，通过pod-identity关联获取委托凭据的场景下，该值固定为 service.cce.pods。 该属性只在pod-identity关联绑定信任委托时返回 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * credentials  credentials
    * podIdentityAssociationId  **参数解释：** 委托凭据所属的pod-identity关联id。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subject  subject
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assumedAgency' => null,
        'audience' => null,
        'credentials' => null,
        'podIdentityAssociationId' => null,
        'subject' => null
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
    * assumedAgency  assumedAgency
    * audience  **参数解释：** 凭据签发时传入的audience属性，通过pod-identity关联获取委托凭据的场景下，该值固定为 service.cce.pods。 该属性只在pod-identity关联绑定信任委托时返回 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * credentials  credentials
    * podIdentityAssociationId  **参数解释：** 委托凭据所属的pod-identity关联id。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subject  subject
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assumedAgency' => 'assumedAgency',
            'audience' => 'audience',
            'credentials' => 'credentials',
            'podIdentityAssociationId' => 'podIdentityAssociationId',
            'subject' => 'subject'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assumedAgency  assumedAgency
    * audience  **参数解释：** 凭据签发时传入的audience属性，通过pod-identity关联获取委托凭据的场景下，该值固定为 service.cce.pods。 该属性只在pod-identity关联绑定信任委托时返回 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * credentials  credentials
    * podIdentityAssociationId  **参数解释：** 委托凭据所属的pod-identity关联id。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subject  subject
    *
    * @var string[]
    */
    protected static $setters = [
            'assumedAgency' => 'setAssumedAgency',
            'audience' => 'setAudience',
            'credentials' => 'setCredentials',
            'podIdentityAssociationId' => 'setPodIdentityAssociationId',
            'subject' => 'setSubject'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assumedAgency  assumedAgency
    * audience  **参数解释：** 凭据签发时传入的audience属性，通过pod-identity关联获取委托凭据的场景下，该值固定为 service.cce.pods。 该属性只在pod-identity关联绑定信任委托时返回 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * credentials  credentials
    * podIdentityAssociationId  **参数解释：** 委托凭据所属的pod-identity关联id。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subject  subject
    *
    * @var string[]
    */
    protected static $getters = [
            'assumedAgency' => 'getAssumedAgency',
            'audience' => 'getAudience',
            'credentials' => 'getCredentials',
            'podIdentityAssociationId' => 'getPodIdentityAssociationId',
            'subject' => 'getSubject'
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
        $this->container['assumedAgency'] = isset($data['assumedAgency']) ? $data['assumedAgency'] : null;
        $this->container['audience'] = isset($data['audience']) ? $data['audience'] : null;
        $this->container['credentials'] = isset($data['credentials']) ? $data['credentials'] : null;
        $this->container['podIdentityAssociationId'] = isset($data['podIdentityAssociationId']) ? $data['podIdentityAssociationId'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
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
    * Gets assumedAgency
    *  assumedAgency
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\AssumedAgency|null
    */
    public function getAssumedAgency()
    {
        return $this->container['assumedAgency'];
    }

    /**
    * Sets assumedAgency
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\AssumedAgency|null $assumedAgency assumedAgency
    *
    * @return $this
    */
    public function setAssumedAgency($assumedAgency)
    {
        $this->container['assumedAgency'] = $assumedAgency;
        return $this;
    }

    /**
    * Gets audience
    *  **参数解释：** 凭据签发时传入的audience属性，通过pod-identity关联获取委托凭据的场景下，该值固定为 service.cce.pods。 该属性只在pod-identity关联绑定信任委托时返回 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getAudience()
    {
        return $this->container['audience'];
    }

    /**
    * Sets audience
    *
    * @param string|null $audience **参数解释：** 凭据签发时传入的audience属性，通过pod-identity关联获取委托凭据的场景下，该值固定为 service.cce.pods。 该属性只在pod-identity关联绑定信任委托时返回 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAudience($audience)
    {
        $this->container['audience'] = $audience;
        return $this;
    }

    /**
    * Gets credentials
    *  credentials
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\Credentials|null
    */
    public function getCredentials()
    {
        return $this->container['credentials'];
    }

    /**
    * Sets credentials
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\Credentials|null $credentials credentials
    *
    * @return $this
    */
    public function setCredentials($credentials)
    {
        $this->container['credentials'] = $credentials;
        return $this;
    }

    /**
    * Gets podIdentityAssociationId
    *  **参数解释：** 委托凭据所属的pod-identity关联id。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getPodIdentityAssociationId()
    {
        return $this->container['podIdentityAssociationId'];
    }

    /**
    * Sets podIdentityAssociationId
    *
    * @param string|null $podIdentityAssociationId **参数解释：** 委托凭据所属的pod-identity关联id。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setPodIdentityAssociationId($podIdentityAssociationId)
    {
        $this->container['podIdentityAssociationId'] = $podIdentityAssociationId;
        return $this;
    }

    /**
    * Gets subject
    *  subject
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\PodIdentitySubject|null
    */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
    * Sets subject
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\PodIdentitySubject|null $subject subject
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
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

