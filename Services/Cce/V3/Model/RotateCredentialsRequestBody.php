<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RotateCredentialsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RotateCredentialsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * component  **参数解释：**  需要轮转的组件名称。 **约束限制：** 不涉及 **取值范围：** - all：轮转CCE集群证书。 - service-account-controller：轮转ServiceAccount token相关证书。 - custom：轮转用户自有证书，指定此参数时，需同时指定certContent参数。  **默认取值：** 不涉及
    * certificateExpirationTime  **参数解释：**  轮转证书后，用于验证ServiceAccount Token签名的旧证书保留时间。  为了保证基于旧证书签发的ServiceAccount Token在证书轮转后能验签通过，CCE会保留老证书一段时间，具体规则如下： - 首次轮转时，CCE会保留创建集群时生成的证书； - 从第二次轮转开始，CCE会保留老证书一段时间，默认24小时。用户可以通过当前参数配置保留的时间。  **约束限制：** 不涉及 **取值范围：** 0-8784（小时） **默认取值：** 24（小时）
    * certContent  certContent
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'component' => 'string',
            'certificateExpirationTime' => 'int',
            'certContent' => '\HuaweiCloud\SDK\Cce\V3\Model\AuthenticatingProxy'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * component  **参数解释：**  需要轮转的组件名称。 **约束限制：** 不涉及 **取值范围：** - all：轮转CCE集群证书。 - service-account-controller：轮转ServiceAccount token相关证书。 - custom：轮转用户自有证书，指定此参数时，需同时指定certContent参数。  **默认取值：** 不涉及
    * certificateExpirationTime  **参数解释：**  轮转证书后，用于验证ServiceAccount Token签名的旧证书保留时间。  为了保证基于旧证书签发的ServiceAccount Token在证书轮转后能验签通过，CCE会保留老证书一段时间，具体规则如下： - 首次轮转时，CCE会保留创建集群时生成的证书； - 从第二次轮转开始，CCE会保留老证书一段时间，默认24小时。用户可以通过当前参数配置保留的时间。  **约束限制：** 不涉及 **取值范围：** 0-8784（小时） **默认取值：** 24（小时）
    * certContent  certContent
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'component' => null,
        'certificateExpirationTime' => 'int32',
        'certContent' => null
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
    * component  **参数解释：**  需要轮转的组件名称。 **约束限制：** 不涉及 **取值范围：** - all：轮转CCE集群证书。 - service-account-controller：轮转ServiceAccount token相关证书。 - custom：轮转用户自有证书，指定此参数时，需同时指定certContent参数。  **默认取值：** 不涉及
    * certificateExpirationTime  **参数解释：**  轮转证书后，用于验证ServiceAccount Token签名的旧证书保留时间。  为了保证基于旧证书签发的ServiceAccount Token在证书轮转后能验签通过，CCE会保留老证书一段时间，具体规则如下： - 首次轮转时，CCE会保留创建集群时生成的证书； - 从第二次轮转开始，CCE会保留老证书一段时间，默认24小时。用户可以通过当前参数配置保留的时间。  **约束限制：** 不涉及 **取值范围：** 0-8784（小时） **默认取值：** 24（小时）
    * certContent  certContent
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'component' => 'component',
            'certificateExpirationTime' => 'certificateExpirationTime',
            'certContent' => 'certContent'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * component  **参数解释：**  需要轮转的组件名称。 **约束限制：** 不涉及 **取值范围：** - all：轮转CCE集群证书。 - service-account-controller：轮转ServiceAccount token相关证书。 - custom：轮转用户自有证书，指定此参数时，需同时指定certContent参数。  **默认取值：** 不涉及
    * certificateExpirationTime  **参数解释：**  轮转证书后，用于验证ServiceAccount Token签名的旧证书保留时间。  为了保证基于旧证书签发的ServiceAccount Token在证书轮转后能验签通过，CCE会保留老证书一段时间，具体规则如下： - 首次轮转时，CCE会保留创建集群时生成的证书； - 从第二次轮转开始，CCE会保留老证书一段时间，默认24小时。用户可以通过当前参数配置保留的时间。  **约束限制：** 不涉及 **取值范围：** 0-8784（小时） **默认取值：** 24（小时）
    * certContent  certContent
    *
    * @var string[]
    */
    protected static $setters = [
            'component' => 'setComponent',
            'certificateExpirationTime' => 'setCertificateExpirationTime',
            'certContent' => 'setCertContent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * component  **参数解释：**  需要轮转的组件名称。 **约束限制：** 不涉及 **取值范围：** - all：轮转CCE集群证书。 - service-account-controller：轮转ServiceAccount token相关证书。 - custom：轮转用户自有证书，指定此参数时，需同时指定certContent参数。  **默认取值：** 不涉及
    * certificateExpirationTime  **参数解释：**  轮转证书后，用于验证ServiceAccount Token签名的旧证书保留时间。  为了保证基于旧证书签发的ServiceAccount Token在证书轮转后能验签通过，CCE会保留老证书一段时间，具体规则如下： - 首次轮转时，CCE会保留创建集群时生成的证书； - 从第二次轮转开始，CCE会保留老证书一段时间，默认24小时。用户可以通过当前参数配置保留的时间。  **约束限制：** 不涉及 **取值范围：** 0-8784（小时） **默认取值：** 24（小时）
    * certContent  certContent
    *
    * @var string[]
    */
    protected static $getters = [
            'component' => 'getComponent',
            'certificateExpirationTime' => 'getCertificateExpirationTime',
            'certContent' => 'getCertContent'
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
        $this->container['component'] = isset($data['component']) ? $data['component'] : null;
        $this->container['certificateExpirationTime'] = isset($data['certificateExpirationTime']) ? $data['certificateExpirationTime'] : null;
        $this->container['certContent'] = isset($data['certContent']) ? $data['certContent'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['component'] === null) {
            $invalidProperties[] = "'component' can't be null";
        }
            if (!is_null($this->container['certificateExpirationTime']) && ($this->container['certificateExpirationTime'] > 8784)) {
                $invalidProperties[] = "invalid value for 'certificateExpirationTime', must be smaller than or equal to 8784.";
            }
            if (!is_null($this->container['certificateExpirationTime']) && ($this->container['certificateExpirationTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'certificateExpirationTime', must be bigger than or equal to 0.";
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
    * Gets component
    *  **参数解释：**  需要轮转的组件名称。 **约束限制：** 不涉及 **取值范围：** - all：轮转CCE集群证书。 - service-account-controller：轮转ServiceAccount token相关证书。 - custom：轮转用户自有证书，指定此参数时，需同时指定certContent参数。  **默认取值：** 不涉及
    *
    * @return string
    */
    public function getComponent()
    {
        return $this->container['component'];
    }

    /**
    * Sets component
    *
    * @param string $component **参数解释：**  需要轮转的组件名称。 **约束限制：** 不涉及 **取值范围：** - all：轮转CCE集群证书。 - service-account-controller：轮转ServiceAccount token相关证书。 - custom：轮转用户自有证书，指定此参数时，需同时指定certContent参数。  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setComponent($component)
    {
        $this->container['component'] = $component;
        return $this;
    }

    /**
    * Gets certificateExpirationTime
    *  **参数解释：**  轮转证书后，用于验证ServiceAccount Token签名的旧证书保留时间。  为了保证基于旧证书签发的ServiceAccount Token在证书轮转后能验签通过，CCE会保留老证书一段时间，具体规则如下： - 首次轮转时，CCE会保留创建集群时生成的证书； - 从第二次轮转开始，CCE会保留老证书一段时间，默认24小时。用户可以通过当前参数配置保留的时间。  **约束限制：** 不涉及 **取值范围：** 0-8784（小时） **默认取值：** 24（小时）
    *
    * @return int|null
    */
    public function getCertificateExpirationTime()
    {
        return $this->container['certificateExpirationTime'];
    }

    /**
    * Sets certificateExpirationTime
    *
    * @param int|null $certificateExpirationTime **参数解释：**  轮转证书后，用于验证ServiceAccount Token签名的旧证书保留时间。  为了保证基于旧证书签发的ServiceAccount Token在证书轮转后能验签通过，CCE会保留老证书一段时间，具体规则如下： - 首次轮转时，CCE会保留创建集群时生成的证书； - 从第二次轮转开始，CCE会保留老证书一段时间，默认24小时。用户可以通过当前参数配置保留的时间。  **约束限制：** 不涉及 **取值范围：** 0-8784（小时） **默认取值：** 24（小时）
    *
    * @return $this
    */
    public function setCertificateExpirationTime($certificateExpirationTime)
    {
        $this->container['certificateExpirationTime'] = $certificateExpirationTime;
        return $this;
    }

    /**
    * Gets certContent
    *  certContent
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\AuthenticatingProxy|null
    */
    public function getCertContent()
    {
        return $this->container['certContent'];
    }

    /**
    * Sets certContent
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\AuthenticatingProxy|null $certContent certContent
    *
    * @return $this
    */
    public function setCertContent($certContent)
    {
        $this->container['certContent'] = $certContent;
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

