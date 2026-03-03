<?php

namespace HuaweiCloud\SDK\Ccm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RevokeCertificateRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RevokeCertificateRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * reason  吊销理由，支持以下选项：   - **UNSPECIFIED** : 吊销时未指定吊销原因，为默认值；   - **KEY_COMPROMISE** : 证书密钥材料泄露；   - **CERTIFICATE_AUTHORITY_COMPROMISE** : 颁发路径上，可能存在CA密钥材料泄露；   - **AFFILIATION_CHANGED** : 证书中的主体或其他信息已经被改变；   - **SUPERSEDED** : 此证书已被取代；   - **CESSATION_OF_OPERATION** : 此证书或颁发路径中的实体已停止运营；   - **CERTIFICATE_HOLD** : 该证书当前不应被视为有效，预计将来可能会生效；   - **PRIVILEGE_WITHDRAWN** : 此证书不再具备其声明的属性的权限；   - **ATTRIBUTE_AUTHORITY_COMPROMISE** : 担保此证书属性的机构可能已受到损害。 > 当不想填写吊销理由时，请求body体请置为\"{}\"，否则将会报异常，默认值为UNSPECIFIED。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'reason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * reason  吊销理由，支持以下选项：   - **UNSPECIFIED** : 吊销时未指定吊销原因，为默认值；   - **KEY_COMPROMISE** : 证书密钥材料泄露；   - **CERTIFICATE_AUTHORITY_COMPROMISE** : 颁发路径上，可能存在CA密钥材料泄露；   - **AFFILIATION_CHANGED** : 证书中的主体或其他信息已经被改变；   - **SUPERSEDED** : 此证书已被取代；   - **CESSATION_OF_OPERATION** : 此证书或颁发路径中的实体已停止运营；   - **CERTIFICATE_HOLD** : 该证书当前不应被视为有效，预计将来可能会生效；   - **PRIVILEGE_WITHDRAWN** : 此证书不再具备其声明的属性的权限；   - **ATTRIBUTE_AUTHORITY_COMPROMISE** : 担保此证书属性的机构可能已受到损害。 > 当不想填写吊销理由时，请求body体请置为\"{}\"，否则将会报异常，默认值为UNSPECIFIED。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'reason' => null
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
    * reason  吊销理由，支持以下选项：   - **UNSPECIFIED** : 吊销时未指定吊销原因，为默认值；   - **KEY_COMPROMISE** : 证书密钥材料泄露；   - **CERTIFICATE_AUTHORITY_COMPROMISE** : 颁发路径上，可能存在CA密钥材料泄露；   - **AFFILIATION_CHANGED** : 证书中的主体或其他信息已经被改变；   - **SUPERSEDED** : 此证书已被取代；   - **CESSATION_OF_OPERATION** : 此证书或颁发路径中的实体已停止运营；   - **CERTIFICATE_HOLD** : 该证书当前不应被视为有效，预计将来可能会生效；   - **PRIVILEGE_WITHDRAWN** : 此证书不再具备其声明的属性的权限；   - **ATTRIBUTE_AUTHORITY_COMPROMISE** : 担保此证书属性的机构可能已受到损害。 > 当不想填写吊销理由时，请求body体请置为\"{}\"，否则将会报异常，默认值为UNSPECIFIED。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'reason' => 'reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * reason  吊销理由，支持以下选项：   - **UNSPECIFIED** : 吊销时未指定吊销原因，为默认值；   - **KEY_COMPROMISE** : 证书密钥材料泄露；   - **CERTIFICATE_AUTHORITY_COMPROMISE** : 颁发路径上，可能存在CA密钥材料泄露；   - **AFFILIATION_CHANGED** : 证书中的主体或其他信息已经被改变；   - **SUPERSEDED** : 此证书已被取代；   - **CESSATION_OF_OPERATION** : 此证书或颁发路径中的实体已停止运营；   - **CERTIFICATE_HOLD** : 该证书当前不应被视为有效，预计将来可能会生效；   - **PRIVILEGE_WITHDRAWN** : 此证书不再具备其声明的属性的权限；   - **ATTRIBUTE_AUTHORITY_COMPROMISE** : 担保此证书属性的机构可能已受到损害。 > 当不想填写吊销理由时，请求body体请置为\"{}\"，否则将会报异常，默认值为UNSPECIFIED。
    *
    * @var string[]
    */
    protected static $setters = [
            'reason' => 'setReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * reason  吊销理由，支持以下选项：   - **UNSPECIFIED** : 吊销时未指定吊销原因，为默认值；   - **KEY_COMPROMISE** : 证书密钥材料泄露；   - **CERTIFICATE_AUTHORITY_COMPROMISE** : 颁发路径上，可能存在CA密钥材料泄露；   - **AFFILIATION_CHANGED** : 证书中的主体或其他信息已经被改变；   - **SUPERSEDED** : 此证书已被取代；   - **CESSATION_OF_OPERATION** : 此证书或颁发路径中的实体已停止运营；   - **CERTIFICATE_HOLD** : 该证书当前不应被视为有效，预计将来可能会生效；   - **PRIVILEGE_WITHDRAWN** : 此证书不再具备其声明的属性的权限；   - **ATTRIBUTE_AUTHORITY_COMPROMISE** : 担保此证书属性的机构可能已受到损害。 > 当不想填写吊销理由时，请求body体请置为\"{}\"，否则将会报异常，默认值为UNSPECIFIED。
    *
    * @var string[]
    */
    protected static $getters = [
            'reason' => 'getReason'
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
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
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
    * Gets reason
    *  吊销理由，支持以下选项：   - **UNSPECIFIED** : 吊销时未指定吊销原因，为默认值；   - **KEY_COMPROMISE** : 证书密钥材料泄露；   - **CERTIFICATE_AUTHORITY_COMPROMISE** : 颁发路径上，可能存在CA密钥材料泄露；   - **AFFILIATION_CHANGED** : 证书中的主体或其他信息已经被改变；   - **SUPERSEDED** : 此证书已被取代；   - **CESSATION_OF_OPERATION** : 此证书或颁发路径中的实体已停止运营；   - **CERTIFICATE_HOLD** : 该证书当前不应被视为有效，预计将来可能会生效；   - **PRIVILEGE_WITHDRAWN** : 此证书不再具备其声明的属性的权限；   - **ATTRIBUTE_AUTHORITY_COMPROMISE** : 担保此证书属性的机构可能已受到损害。 > 当不想填写吊销理由时，请求body体请置为\"{}\"，否则将会报异常，默认值为UNSPECIFIED。
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
    * @param string|null $reason 吊销理由，支持以下选项：   - **UNSPECIFIED** : 吊销时未指定吊销原因，为默认值；   - **KEY_COMPROMISE** : 证书密钥材料泄露；   - **CERTIFICATE_AUTHORITY_COMPROMISE** : 颁发路径上，可能存在CA密钥材料泄露；   - **AFFILIATION_CHANGED** : 证书中的主体或其他信息已经被改变；   - **SUPERSEDED** : 此证书已被取代；   - **CESSATION_OF_OPERATION** : 此证书或颁发路径中的实体已停止运营；   - **CERTIFICATE_HOLD** : 该证书当前不应被视为有效，预计将来可能会生效；   - **PRIVILEGE_WITHDRAWN** : 此证书不再具备其声明的属性的权限；   - **ATTRIBUTE_AUTHORITY_COMPROMISE** : 担保此证书属性的机构可能已受到损害。 > 当不想填写吊销理由时，请求body体请置为\"{}\"，否则将会报异常，默认值为UNSPECIFIED。
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
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

