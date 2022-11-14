<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MigrateCompositeHostsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MigrateCompositeHostsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostIds  host_id列表
    * policyId  策略ID（目标企业项目下的策略ID）
    * certificateId  证书ID（目标企业项目下的证书ID）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostIds' => 'string[]',
            'policyId' => 'string',
            'certificateId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostIds  host_id列表
    * policyId  策略ID（目标企业项目下的策略ID）
    * certificateId  证书ID（目标企业项目下的证书ID）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostIds' => null,
        'policyId' => null,
        'certificateId' => null
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
    * hostIds  host_id列表
    * policyId  策略ID（目标企业项目下的策略ID）
    * certificateId  证书ID（目标企业项目下的证书ID）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostIds' => 'host_ids',
            'policyId' => 'policy_id',
            'certificateId' => 'certificate_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostIds  host_id列表
    * policyId  策略ID（目标企业项目下的策略ID）
    * certificateId  证书ID（目标企业项目下的证书ID）
    *
    * @var string[]
    */
    protected static $setters = [
            'hostIds' => 'setHostIds',
            'policyId' => 'setPolicyId',
            'certificateId' => 'setCertificateId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostIds  host_id列表
    * policyId  策略ID（目标企业项目下的策略ID）
    * certificateId  证书ID（目标企业项目下的证书ID）
    *
    * @var string[]
    */
    protected static $getters = [
            'hostIds' => 'getHostIds',
            'policyId' => 'getPolicyId',
            'certificateId' => 'getCertificateId'
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
        $this->container['hostIds'] = isset($data['hostIds']) ? $data['hostIds'] : null;
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['certificateId'] = isset($data['certificateId']) ? $data['certificateId'] : null;
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
    * Gets hostIds
    *  host_id列表
    *
    * @return string[]|null
    */
    public function getHostIds()
    {
        return $this->container['hostIds'];
    }

    /**
    * Sets hostIds
    *
    * @param string[]|null $hostIds host_id列表
    *
    * @return $this
    */
    public function setHostIds($hostIds)
    {
        $this->container['hostIds'] = $hostIds;
        return $this;
    }

    /**
    * Gets policyId
    *  策略ID（目标企业项目下的策略ID）
    *
    * @return string|null
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string|null $policyId 策略ID（目标企业项目下的策略ID）
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets certificateId
    *  证书ID（目标企业项目下的证书ID）
    *
    * @return string|null
    */
    public function getCertificateId()
    {
        return $this->container['certificateId'];
    }

    /**
    * Sets certificateId
    *
    * @param string|null $certificateId 证书ID（目标企业项目下的证书ID）
    *
    * @return $this
    */
    public function setCertificateId($certificateId)
    {
        $this->container['certificateId'] = $certificateId;
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

