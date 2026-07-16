<?php

namespace HuaweiCloud\SDK\Sts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssumeAgencyWithSAMLResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssumeAgencyWithSAMLResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceIdentity  **参数解释**： SAML断言中SourceIdentity属性值所申明的身份。  **约束限制**： 不涉及。
    * assumedAgency  assumedAgency
    * credentials  credentials
    * audience  **参数解释**：  SAML断言中SubjectConfirmationData元素的Recipient属性值。  **约束限制**： 不涉及。
    * issuer  **参数解释**： SAML断言中Issuer元素的值。  **约束限制**： 不涉及。
    * nameQualifier  **参数解释**： 以下三部分的哈希值：issuer、华为云账号的Account ID以及IAM中SAML提供商的名称（URN的最后一部分）。name_qualifier和subject的组合可用于唯一标识用户。下面的伪代码展示了哈希值的计算方式：BASE64 ( SHA1 ( \"https://example.com/saml\" + \"8c1eef3a241945f69c3d3axxxxxxxxxx\" + \"/MySAMLIdPName\" ) )  **约束限制**： 不涉及。
    * subject  **参数解释**：  SAML断言中Subject元素的NameID元素的值。  **约束限制**： 不涉及。
    * subjectType  **参数解释**：  NameID的格式，由SAML断言中NameID元素的Format属性定义。格式的典型示例是transient（临时）或persistent（持久）。 如果该格式包含前缀urn:oasis:names:tc:SAML:2.0:nameid-format，该前缀将被移除。例如，urn:oasis:names:tc:SAML:2.0:nameid-format:transient将作为transient返回。如果格式包含任何其他前缀，则直接返回该格式而不作任何修改。  **约束限制**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceIdentity' => 'string',
            'assumedAgency' => '\HuaweiCloud\SDK\Sts\V1\Model\AssumedAgencyWithFederationDto',
            'credentials' => '\HuaweiCloud\SDK\Sts\V1\Model\CredentialsDto',
            'audience' => 'string',
            'issuer' => 'string',
            'nameQualifier' => 'string',
            'subject' => 'string',
            'subjectType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceIdentity  **参数解释**： SAML断言中SourceIdentity属性值所申明的身份。  **约束限制**： 不涉及。
    * assumedAgency  assumedAgency
    * credentials  credentials
    * audience  **参数解释**：  SAML断言中SubjectConfirmationData元素的Recipient属性值。  **约束限制**： 不涉及。
    * issuer  **参数解释**： SAML断言中Issuer元素的值。  **约束限制**： 不涉及。
    * nameQualifier  **参数解释**： 以下三部分的哈希值：issuer、华为云账号的Account ID以及IAM中SAML提供商的名称（URN的最后一部分）。name_qualifier和subject的组合可用于唯一标识用户。下面的伪代码展示了哈希值的计算方式：BASE64 ( SHA1 ( \"https://example.com/saml\" + \"8c1eef3a241945f69c3d3axxxxxxxxxx\" + \"/MySAMLIdPName\" ) )  **约束限制**： 不涉及。
    * subject  **参数解释**：  SAML断言中Subject元素的NameID元素的值。  **约束限制**： 不涉及。
    * subjectType  **参数解释**：  NameID的格式，由SAML断言中NameID元素的Format属性定义。格式的典型示例是transient（临时）或persistent（持久）。 如果该格式包含前缀urn:oasis:names:tc:SAML:2.0:nameid-format，该前缀将被移除。例如，urn:oasis:names:tc:SAML:2.0:nameid-format:transient将作为transient返回。如果格式包含任何其他前缀，则直接返回该格式而不作任何修改。  **约束限制**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceIdentity' => null,
        'assumedAgency' => null,
        'credentials' => null,
        'audience' => null,
        'issuer' => null,
        'nameQualifier' => null,
        'subject' => null,
        'subjectType' => null
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
    * sourceIdentity  **参数解释**： SAML断言中SourceIdentity属性值所申明的身份。  **约束限制**： 不涉及。
    * assumedAgency  assumedAgency
    * credentials  credentials
    * audience  **参数解释**：  SAML断言中SubjectConfirmationData元素的Recipient属性值。  **约束限制**： 不涉及。
    * issuer  **参数解释**： SAML断言中Issuer元素的值。  **约束限制**： 不涉及。
    * nameQualifier  **参数解释**： 以下三部分的哈希值：issuer、华为云账号的Account ID以及IAM中SAML提供商的名称（URN的最后一部分）。name_qualifier和subject的组合可用于唯一标识用户。下面的伪代码展示了哈希值的计算方式：BASE64 ( SHA1 ( \"https://example.com/saml\" + \"8c1eef3a241945f69c3d3axxxxxxxxxx\" + \"/MySAMLIdPName\" ) )  **约束限制**： 不涉及。
    * subject  **参数解释**：  SAML断言中Subject元素的NameID元素的值。  **约束限制**： 不涉及。
    * subjectType  **参数解释**：  NameID的格式，由SAML断言中NameID元素的Format属性定义。格式的典型示例是transient（临时）或persistent（持久）。 如果该格式包含前缀urn:oasis:names:tc:SAML:2.0:nameid-format，该前缀将被移除。例如，urn:oasis:names:tc:SAML:2.0:nameid-format:transient将作为transient返回。如果格式包含任何其他前缀，则直接返回该格式而不作任何修改。  **约束限制**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceIdentity' => 'source_identity',
            'assumedAgency' => 'assumed_agency',
            'credentials' => 'credentials',
            'audience' => 'audience',
            'issuer' => 'issuer',
            'nameQualifier' => 'name_qualifier',
            'subject' => 'subject',
            'subjectType' => 'subject_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceIdentity  **参数解释**： SAML断言中SourceIdentity属性值所申明的身份。  **约束限制**： 不涉及。
    * assumedAgency  assumedAgency
    * credentials  credentials
    * audience  **参数解释**：  SAML断言中SubjectConfirmationData元素的Recipient属性值。  **约束限制**： 不涉及。
    * issuer  **参数解释**： SAML断言中Issuer元素的值。  **约束限制**： 不涉及。
    * nameQualifier  **参数解释**： 以下三部分的哈希值：issuer、华为云账号的Account ID以及IAM中SAML提供商的名称（URN的最后一部分）。name_qualifier和subject的组合可用于唯一标识用户。下面的伪代码展示了哈希值的计算方式：BASE64 ( SHA1 ( \"https://example.com/saml\" + \"8c1eef3a241945f69c3d3axxxxxxxxxx\" + \"/MySAMLIdPName\" ) )  **约束限制**： 不涉及。
    * subject  **参数解释**：  SAML断言中Subject元素的NameID元素的值。  **约束限制**： 不涉及。
    * subjectType  **参数解释**：  NameID的格式，由SAML断言中NameID元素的Format属性定义。格式的典型示例是transient（临时）或persistent（持久）。 如果该格式包含前缀urn:oasis:names:tc:SAML:2.0:nameid-format，该前缀将被移除。例如，urn:oasis:names:tc:SAML:2.0:nameid-format:transient将作为transient返回。如果格式包含任何其他前缀，则直接返回该格式而不作任何修改。  **约束限制**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceIdentity' => 'setSourceIdentity',
            'assumedAgency' => 'setAssumedAgency',
            'credentials' => 'setCredentials',
            'audience' => 'setAudience',
            'issuer' => 'setIssuer',
            'nameQualifier' => 'setNameQualifier',
            'subject' => 'setSubject',
            'subjectType' => 'setSubjectType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceIdentity  **参数解释**： SAML断言中SourceIdentity属性值所申明的身份。  **约束限制**： 不涉及。
    * assumedAgency  assumedAgency
    * credentials  credentials
    * audience  **参数解释**：  SAML断言中SubjectConfirmationData元素的Recipient属性值。  **约束限制**： 不涉及。
    * issuer  **参数解释**： SAML断言中Issuer元素的值。  **约束限制**： 不涉及。
    * nameQualifier  **参数解释**： 以下三部分的哈希值：issuer、华为云账号的Account ID以及IAM中SAML提供商的名称（URN的最后一部分）。name_qualifier和subject的组合可用于唯一标识用户。下面的伪代码展示了哈希值的计算方式：BASE64 ( SHA1 ( \"https://example.com/saml\" + \"8c1eef3a241945f69c3d3axxxxxxxxxx\" + \"/MySAMLIdPName\" ) )  **约束限制**： 不涉及。
    * subject  **参数解释**：  SAML断言中Subject元素的NameID元素的值。  **约束限制**： 不涉及。
    * subjectType  **参数解释**：  NameID的格式，由SAML断言中NameID元素的Format属性定义。格式的典型示例是transient（临时）或persistent（持久）。 如果该格式包含前缀urn:oasis:names:tc:SAML:2.0:nameid-format，该前缀将被移除。例如，urn:oasis:names:tc:SAML:2.0:nameid-format:transient将作为transient返回。如果格式包含任何其他前缀，则直接返回该格式而不作任何修改。  **约束限制**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceIdentity' => 'getSourceIdentity',
            'assumedAgency' => 'getAssumedAgency',
            'credentials' => 'getCredentials',
            'audience' => 'getAudience',
            'issuer' => 'getIssuer',
            'nameQualifier' => 'getNameQualifier',
            'subject' => 'getSubject',
            'subjectType' => 'getSubjectType'
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
        $this->container['sourceIdentity'] = isset($data['sourceIdentity']) ? $data['sourceIdentity'] : null;
        $this->container['assumedAgency'] = isset($data['assumedAgency']) ? $data['assumedAgency'] : null;
        $this->container['credentials'] = isset($data['credentials']) ? $data['credentials'] : null;
        $this->container['audience'] = isset($data['audience']) ? $data['audience'] : null;
        $this->container['issuer'] = isset($data['issuer']) ? $data['issuer'] : null;
        $this->container['nameQualifier'] = isset($data['nameQualifier']) ? $data['nameQualifier'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['subjectType'] = isset($data['subjectType']) ? $data['subjectType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['sourceIdentity']) && (mb_strlen($this->container['sourceIdentity']) > 64)) {
                $invalidProperties[] = "invalid value for 'sourceIdentity', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sourceIdentity']) && (mb_strlen($this->container['sourceIdentity']) < 2)) {
                $invalidProperties[] = "invalid value for 'sourceIdentity', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['sourceIdentity']) && !preg_match("/^[\\w+=,.@-]*$/", $this->container['sourceIdentity'])) {
                $invalidProperties[] = "invalid value for 'sourceIdentity', must be conform to the pattern /^[\\w+=,.@-]*$/.";
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
    * Gets sourceIdentity
    *  **参数解释**： SAML断言中SourceIdentity属性值所申明的身份。  **约束限制**： 不涉及。
    *
    * @return string|null
    */
    public function getSourceIdentity()
    {
        return $this->container['sourceIdentity'];
    }

    /**
    * Sets sourceIdentity
    *
    * @param string|null $sourceIdentity **参数解释**： SAML断言中SourceIdentity属性值所申明的身份。  **约束限制**： 不涉及。
    *
    * @return $this
    */
    public function setSourceIdentity($sourceIdentity)
    {
        $this->container['sourceIdentity'] = $sourceIdentity;
        return $this;
    }

    /**
    * Gets assumedAgency
    *  assumedAgency
    *
    * @return \HuaweiCloud\SDK\Sts\V1\Model\AssumedAgencyWithFederationDto|null
    */
    public function getAssumedAgency()
    {
        return $this->container['assumedAgency'];
    }

    /**
    * Sets assumedAgency
    *
    * @param \HuaweiCloud\SDK\Sts\V1\Model\AssumedAgencyWithFederationDto|null $assumedAgency assumedAgency
    *
    * @return $this
    */
    public function setAssumedAgency($assumedAgency)
    {
        $this->container['assumedAgency'] = $assumedAgency;
        return $this;
    }

    /**
    * Gets credentials
    *  credentials
    *
    * @return \HuaweiCloud\SDK\Sts\V1\Model\CredentialsDto|null
    */
    public function getCredentials()
    {
        return $this->container['credentials'];
    }

    /**
    * Sets credentials
    *
    * @param \HuaweiCloud\SDK\Sts\V1\Model\CredentialsDto|null $credentials credentials
    *
    * @return $this
    */
    public function setCredentials($credentials)
    {
        $this->container['credentials'] = $credentials;
        return $this;
    }

    /**
    * Gets audience
    *  **参数解释**：  SAML断言中SubjectConfirmationData元素的Recipient属性值。  **约束限制**： 不涉及。
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
    * @param string|null $audience **参数解释**：  SAML断言中SubjectConfirmationData元素的Recipient属性值。  **约束限制**： 不涉及。
    *
    * @return $this
    */
    public function setAudience($audience)
    {
        $this->container['audience'] = $audience;
        return $this;
    }

    /**
    * Gets issuer
    *  **参数解释**： SAML断言中Issuer元素的值。  **约束限制**： 不涉及。
    *
    * @return string|null
    */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
    * Sets issuer
    *
    * @param string|null $issuer **参数解释**： SAML断言中Issuer元素的值。  **约束限制**： 不涉及。
    *
    * @return $this
    */
    public function setIssuer($issuer)
    {
        $this->container['issuer'] = $issuer;
        return $this;
    }

    /**
    * Gets nameQualifier
    *  **参数解释**： 以下三部分的哈希值：issuer、华为云账号的Account ID以及IAM中SAML提供商的名称（URN的最后一部分）。name_qualifier和subject的组合可用于唯一标识用户。下面的伪代码展示了哈希值的计算方式：BASE64 ( SHA1 ( \"https://example.com/saml\" + \"8c1eef3a241945f69c3d3axxxxxxxxxx\" + \"/MySAMLIdPName\" ) )  **约束限制**： 不涉及。
    *
    * @return string|null
    */
    public function getNameQualifier()
    {
        return $this->container['nameQualifier'];
    }

    /**
    * Sets nameQualifier
    *
    * @param string|null $nameQualifier **参数解释**： 以下三部分的哈希值：issuer、华为云账号的Account ID以及IAM中SAML提供商的名称（URN的最后一部分）。name_qualifier和subject的组合可用于唯一标识用户。下面的伪代码展示了哈希值的计算方式：BASE64 ( SHA1 ( \"https://example.com/saml\" + \"8c1eef3a241945f69c3d3axxxxxxxxxx\" + \"/MySAMLIdPName\" ) )  **约束限制**： 不涉及。
    *
    * @return $this
    */
    public function setNameQualifier($nameQualifier)
    {
        $this->container['nameQualifier'] = $nameQualifier;
        return $this;
    }

    /**
    * Gets subject
    *  **参数解释**：  SAML断言中Subject元素的NameID元素的值。  **约束限制**： 不涉及。
    *
    * @return string|null
    */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
    * Sets subject
    *
    * @param string|null $subject **参数解释**：  SAML断言中Subject元素的NameID元素的值。  **约束限制**： 不涉及。
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
        return $this;
    }

    /**
    * Gets subjectType
    *  **参数解释**：  NameID的格式，由SAML断言中NameID元素的Format属性定义。格式的典型示例是transient（临时）或persistent（持久）。 如果该格式包含前缀urn:oasis:names:tc:SAML:2.0:nameid-format，该前缀将被移除。例如，urn:oasis:names:tc:SAML:2.0:nameid-format:transient将作为transient返回。如果格式包含任何其他前缀，则直接返回该格式而不作任何修改。  **约束限制**： 不涉及。
    *
    * @return string|null
    */
    public function getSubjectType()
    {
        return $this->container['subjectType'];
    }

    /**
    * Sets subjectType
    *
    * @param string|null $subjectType **参数解释**：  NameID的格式，由SAML断言中NameID元素的Format属性定义。格式的典型示例是transient（临时）或persistent（持久）。 如果该格式包含前缀urn:oasis:names:tc:SAML:2.0:nameid-format，该前缀将被移除。例如，urn:oasis:names:tc:SAML:2.0:nameid-format:transient将作为transient返回。如果格式包含任何其他前缀，则直接返回该格式而不作任何修改。  **约束限制**： 不涉及。
    *
    * @return $this
    */
    public function setSubjectType($subjectType)
    {
        $this->container['subjectType'] = $subjectType;
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

