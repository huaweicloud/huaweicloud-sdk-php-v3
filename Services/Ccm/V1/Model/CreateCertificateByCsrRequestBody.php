<?php

namespace HuaweiCloud\SDK\Ccm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCertificateByCsrRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCertificateByCsrRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * issuerId  父CA证书ID。
    * csr  证书签名请求。请使用“\\r\\n”或“\\n”替代证书签名请求中的换行符，若通过console端请求此接口，则无需做符号转换。
    * validity  validity
    * type  证书类型，用于区分从属CA与私有证书。   - **ENTITY_CERT** : 签发私有证书，为缺省值；   - **INTERMEDIATE_CA** : 签发从属CA。
    * pathLength  路径长度，仅当签发从属CA时有效。
    * subjectAlternativeNames  主体备用名称(本接口预留参数，当前在后端被忽略)，详情请参见**SubjectAlternativeName**字段数据结构说明。
    * enterpriseProjectId  企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件.   取值为“all”   取值为“0”   满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'issuerId' => 'string',
            'csr' => 'string',
            'validity' => '\HuaweiCloud\SDK\Ccm\V1\Model\Validity',
            'type' => 'string',
            'pathLength' => 'int',
            'subjectAlternativeNames' => '\HuaweiCloud\SDK\Ccm\V1\Model\SubjectAlternativeName[]',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * issuerId  父CA证书ID。
    * csr  证书签名请求。请使用“\\r\\n”或“\\n”替代证书签名请求中的换行符，若通过console端请求此接口，则无需做符号转换。
    * validity  validity
    * type  证书类型，用于区分从属CA与私有证书。   - **ENTITY_CERT** : 签发私有证书，为缺省值；   - **INTERMEDIATE_CA** : 签发从属CA。
    * pathLength  路径长度，仅当签发从属CA时有效。
    * subjectAlternativeNames  主体备用名称(本接口预留参数，当前在后端被忽略)，详情请参见**SubjectAlternativeName**字段数据结构说明。
    * enterpriseProjectId  企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件.   取值为“all”   取值为“0”   满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'issuerId' => null,
        'csr' => null,
        'validity' => null,
        'type' => null,
        'pathLength' => 'int32',
        'subjectAlternativeNames' => null,
        'enterpriseProjectId' => null
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
    * issuerId  父CA证书ID。
    * csr  证书签名请求。请使用“\\r\\n”或“\\n”替代证书签名请求中的换行符，若通过console端请求此接口，则无需做符号转换。
    * validity  validity
    * type  证书类型，用于区分从属CA与私有证书。   - **ENTITY_CERT** : 签发私有证书，为缺省值；   - **INTERMEDIATE_CA** : 签发从属CA。
    * pathLength  路径长度，仅当签发从属CA时有效。
    * subjectAlternativeNames  主体备用名称(本接口预留参数，当前在后端被忽略)，详情请参见**SubjectAlternativeName**字段数据结构说明。
    * enterpriseProjectId  企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件.   取值为“all”   取值为“0”   满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'issuerId' => 'issuer_id',
            'csr' => 'csr',
            'validity' => 'validity',
            'type' => 'type',
            'pathLength' => 'path_length',
            'subjectAlternativeNames' => 'subject_alternative_names',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * issuerId  父CA证书ID。
    * csr  证书签名请求。请使用“\\r\\n”或“\\n”替代证书签名请求中的换行符，若通过console端请求此接口，则无需做符号转换。
    * validity  validity
    * type  证书类型，用于区分从属CA与私有证书。   - **ENTITY_CERT** : 签发私有证书，为缺省值；   - **INTERMEDIATE_CA** : 签发从属CA。
    * pathLength  路径长度，仅当签发从属CA时有效。
    * subjectAlternativeNames  主体备用名称(本接口预留参数，当前在后端被忽略)，详情请参见**SubjectAlternativeName**字段数据结构说明。
    * enterpriseProjectId  企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件.   取值为“all”   取值为“0”   满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
    *
    * @var string[]
    */
    protected static $setters = [
            'issuerId' => 'setIssuerId',
            'csr' => 'setCsr',
            'validity' => 'setValidity',
            'type' => 'setType',
            'pathLength' => 'setPathLength',
            'subjectAlternativeNames' => 'setSubjectAlternativeNames',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * issuerId  父CA证书ID。
    * csr  证书签名请求。请使用“\\r\\n”或“\\n”替代证书签名请求中的换行符，若通过console端请求此接口，则无需做符号转换。
    * validity  validity
    * type  证书类型，用于区分从属CA与私有证书。   - **ENTITY_CERT** : 签发私有证书，为缺省值；   - **INTERMEDIATE_CA** : 签发从属CA。
    * pathLength  路径长度，仅当签发从属CA时有效。
    * subjectAlternativeNames  主体备用名称(本接口预留参数，当前在后端被忽略)，详情请参见**SubjectAlternativeName**字段数据结构说明。
    * enterpriseProjectId  企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件.   取值为“all”   取值为“0”   满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
    *
    * @var string[]
    */
    protected static $getters = [
            'issuerId' => 'getIssuerId',
            'csr' => 'getCsr',
            'validity' => 'getValidity',
            'type' => 'getType',
            'pathLength' => 'getPathLength',
            'subjectAlternativeNames' => 'getSubjectAlternativeNames',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['issuerId'] = isset($data['issuerId']) ? $data['issuerId'] : null;
        $this->container['csr'] = isset($data['csr']) ? $data['csr'] : null;
        $this->container['validity'] = isset($data['validity']) ? $data['validity'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['pathLength'] = isset($data['pathLength']) ? $data['pathLength'] : null;
        $this->container['subjectAlternativeNames'] = isset($data['subjectAlternativeNames']) ? $data['subjectAlternativeNames'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['issuerId'] === null) {
            $invalidProperties[] = "'issuerId' can't be null";
        }
            if ((mb_strlen($this->container['issuerId']) > 36)) {
                $invalidProperties[] = "invalid value for 'issuerId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['issuerId']) < 36)) {
                $invalidProperties[] = "invalid value for 'issuerId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['csr'] === null) {
            $invalidProperties[] = "'csr' can't be null";
        }
            if ((mb_strlen($this->container['csr']) > 5120)) {
                $invalidProperties[] = "invalid value for 'csr', the character length must be smaller than or equal to 5120.";
            }
        if ($this->container['validity'] === null) {
            $invalidProperties[] = "'validity' can't be null";
        }
            if (!is_null($this->container['pathLength']) && ($this->container['pathLength'] > 6)) {
                $invalidProperties[] = "invalid value for 'pathLength', must be smaller than or equal to 6.";
            }
            if (!is_null($this->container['pathLength']) && ($this->container['pathLength'] < 0)) {
                $invalidProperties[] = "invalid value for 'pathLength', must be bigger than or equal to 0.";
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
    * Gets issuerId
    *  父CA证书ID。
    *
    * @return string
    */
    public function getIssuerId()
    {
        return $this->container['issuerId'];
    }

    /**
    * Sets issuerId
    *
    * @param string $issuerId 父CA证书ID。
    *
    * @return $this
    */
    public function setIssuerId($issuerId)
    {
        $this->container['issuerId'] = $issuerId;
        return $this;
    }

    /**
    * Gets csr
    *  证书签名请求。请使用“\\r\\n”或“\\n”替代证书签名请求中的换行符，若通过console端请求此接口，则无需做符号转换。
    *
    * @return string
    */
    public function getCsr()
    {
        return $this->container['csr'];
    }

    /**
    * Sets csr
    *
    * @param string $csr 证书签名请求。请使用“\\r\\n”或“\\n”替代证书签名请求中的换行符，若通过console端请求此接口，则无需做符号转换。
    *
    * @return $this
    */
    public function setCsr($csr)
    {
        $this->container['csr'] = $csr;
        return $this;
    }

    /**
    * Gets validity
    *  validity
    *
    * @return \HuaweiCloud\SDK\Ccm\V1\Model\Validity
    */
    public function getValidity()
    {
        return $this->container['validity'];
    }

    /**
    * Sets validity
    *
    * @param \HuaweiCloud\SDK\Ccm\V1\Model\Validity $validity validity
    *
    * @return $this
    */
    public function setValidity($validity)
    {
        $this->container['validity'] = $validity;
        return $this;
    }

    /**
    * Gets type
    *  证书类型，用于区分从属CA与私有证书。   - **ENTITY_CERT** : 签发私有证书，为缺省值；   - **INTERMEDIATE_CA** : 签发从属CA。
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
    * @param string|null $type 证书类型，用于区分从属CA与私有证书。   - **ENTITY_CERT** : 签发私有证书，为缺省值；   - **INTERMEDIATE_CA** : 签发从属CA。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets pathLength
    *  路径长度，仅当签发从属CA时有效。
    *
    * @return int|null
    */
    public function getPathLength()
    {
        return $this->container['pathLength'];
    }

    /**
    * Sets pathLength
    *
    * @param int|null $pathLength 路径长度，仅当签发从属CA时有效。
    *
    * @return $this
    */
    public function setPathLength($pathLength)
    {
        $this->container['pathLength'] = $pathLength;
        return $this;
    }

    /**
    * Gets subjectAlternativeNames
    *  主体备用名称(本接口预留参数，当前在后端被忽略)，详情请参见**SubjectAlternativeName**字段数据结构说明。
    *
    * @return \HuaweiCloud\SDK\Ccm\V1\Model\SubjectAlternativeName[]|null
    */
    public function getSubjectAlternativeNames()
    {
        return $this->container['subjectAlternativeNames'];
    }

    /**
    * Sets subjectAlternativeNames
    *
    * @param \HuaweiCloud\SDK\Ccm\V1\Model\SubjectAlternativeName[]|null $subjectAlternativeNames 主体备用名称(本接口预留参数，当前在后端被忽略)，详情请参见**SubjectAlternativeName**字段数据结构说明。
    *
    * @return $this
    */
    public function setSubjectAlternativeNames($subjectAlternativeNames)
    {
        $this->container['subjectAlternativeNames'] = $subjectAlternativeNames;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件.   取值为“all”   取值为“0”   满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件.   取值为“all”   取值为“0”   满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

