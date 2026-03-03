<?php

namespace HuaweiCloud\SDK\Scm\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImportCertificateRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImportCertificateRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  证书名称。字符长度为3~63位, 请输入英文字符，数字，下划线，中划线，英文句点。
    * certificate  证书内容，可包含中间证书及根证书。若certificate_chain字段传入证书链，则该字段只取证书本身。回车换行需要使用转义字符\\n或者\\r\\n替换。
    * certificateChain  证书链，非必填，可通过certificate字段传入。回车换行需要使用转义字符\\n或者\\r\\n替换。
    * privateKey  证书私钥。 不能上传带有口令保护的私钥，回车换行需要使用转义字符\\n或者\\r\\n替换。
    * duplicateCheck  是否允许上传相同证书。 - true：同意上传相同证书。 - false：不同意上传相同证书。
    * enterpriseProjectId  企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件。 - 取值为“all” - 取值为“0” - 满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
    * encCertificate  可选参数，国密证书的加密证书内容。回车换行需要使用转义字符\\n或者\\r\\n替换。
    * encPrivateKey  可选参数，国密证书的加密私钥。 不能上传带有口令保护的私钥，回车换行需要使用转义字符\\n或者\\r\\n替换。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'certificate' => 'string',
            'certificateChain' => 'string',
            'privateKey' => 'string',
            'duplicateCheck' => 'bool',
            'enterpriseProjectId' => 'string',
            'encCertificate' => 'string',
            'encPrivateKey' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  证书名称。字符长度为3~63位, 请输入英文字符，数字，下划线，中划线，英文句点。
    * certificate  证书内容，可包含中间证书及根证书。若certificate_chain字段传入证书链，则该字段只取证书本身。回车换行需要使用转义字符\\n或者\\r\\n替换。
    * certificateChain  证书链，非必填，可通过certificate字段传入。回车换行需要使用转义字符\\n或者\\r\\n替换。
    * privateKey  证书私钥。 不能上传带有口令保护的私钥，回车换行需要使用转义字符\\n或者\\r\\n替换。
    * duplicateCheck  是否允许上传相同证书。 - true：同意上传相同证书。 - false：不同意上传相同证书。
    * enterpriseProjectId  企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件。 - 取值为“all” - 取值为“0” - 满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
    * encCertificate  可选参数，国密证书的加密证书内容。回车换行需要使用转义字符\\n或者\\r\\n替换。
    * encPrivateKey  可选参数，国密证书的加密私钥。 不能上传带有口令保护的私钥，回车换行需要使用转义字符\\n或者\\r\\n替换。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'certificate' => null,
        'certificateChain' => null,
        'privateKey' => null,
        'duplicateCheck' => null,
        'enterpriseProjectId' => null,
        'encCertificate' => null,
        'encPrivateKey' => null
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
    * name  证书名称。字符长度为3~63位, 请输入英文字符，数字，下划线，中划线，英文句点。
    * certificate  证书内容，可包含中间证书及根证书。若certificate_chain字段传入证书链，则该字段只取证书本身。回车换行需要使用转义字符\\n或者\\r\\n替换。
    * certificateChain  证书链，非必填，可通过certificate字段传入。回车换行需要使用转义字符\\n或者\\r\\n替换。
    * privateKey  证书私钥。 不能上传带有口令保护的私钥，回车换行需要使用转义字符\\n或者\\r\\n替换。
    * duplicateCheck  是否允许上传相同证书。 - true：同意上传相同证书。 - false：不同意上传相同证书。
    * enterpriseProjectId  企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件。 - 取值为“all” - 取值为“0” - 满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
    * encCertificate  可选参数，国密证书的加密证书内容。回车换行需要使用转义字符\\n或者\\r\\n替换。
    * encPrivateKey  可选参数，国密证书的加密私钥。 不能上传带有口令保护的私钥，回车换行需要使用转义字符\\n或者\\r\\n替换。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'certificate' => 'certificate',
            'certificateChain' => 'certificate_chain',
            'privateKey' => 'private_key',
            'duplicateCheck' => 'duplicate_check',
            'enterpriseProjectId' => 'enterprise_project_id',
            'encCertificate' => 'enc_certificate',
            'encPrivateKey' => 'enc_private_key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  证书名称。字符长度为3~63位, 请输入英文字符，数字，下划线，中划线，英文句点。
    * certificate  证书内容，可包含中间证书及根证书。若certificate_chain字段传入证书链，则该字段只取证书本身。回车换行需要使用转义字符\\n或者\\r\\n替换。
    * certificateChain  证书链，非必填，可通过certificate字段传入。回车换行需要使用转义字符\\n或者\\r\\n替换。
    * privateKey  证书私钥。 不能上传带有口令保护的私钥，回车换行需要使用转义字符\\n或者\\r\\n替换。
    * duplicateCheck  是否允许上传相同证书。 - true：同意上传相同证书。 - false：不同意上传相同证书。
    * enterpriseProjectId  企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件。 - 取值为“all” - 取值为“0” - 满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
    * encCertificate  可选参数，国密证书的加密证书内容。回车换行需要使用转义字符\\n或者\\r\\n替换。
    * encPrivateKey  可选参数，国密证书的加密私钥。 不能上传带有口令保护的私钥，回车换行需要使用转义字符\\n或者\\r\\n替换。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'certificate' => 'setCertificate',
            'certificateChain' => 'setCertificateChain',
            'privateKey' => 'setPrivateKey',
            'duplicateCheck' => 'setDuplicateCheck',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'encCertificate' => 'setEncCertificate',
            'encPrivateKey' => 'setEncPrivateKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  证书名称。字符长度为3~63位, 请输入英文字符，数字，下划线，中划线，英文句点。
    * certificate  证书内容，可包含中间证书及根证书。若certificate_chain字段传入证书链，则该字段只取证书本身。回车换行需要使用转义字符\\n或者\\r\\n替换。
    * certificateChain  证书链，非必填，可通过certificate字段传入。回车换行需要使用转义字符\\n或者\\r\\n替换。
    * privateKey  证书私钥。 不能上传带有口令保护的私钥，回车换行需要使用转义字符\\n或者\\r\\n替换。
    * duplicateCheck  是否允许上传相同证书。 - true：同意上传相同证书。 - false：不同意上传相同证书。
    * enterpriseProjectId  企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件。 - 取值为“all” - 取值为“0” - 满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
    * encCertificate  可选参数，国密证书的加密证书内容。回车换行需要使用转义字符\\n或者\\r\\n替换。
    * encPrivateKey  可选参数，国密证书的加密私钥。 不能上传带有口令保护的私钥，回车换行需要使用转义字符\\n或者\\r\\n替换。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'certificate' => 'getCertificate',
            'certificateChain' => 'getCertificateChain',
            'privateKey' => 'getPrivateKey',
            'duplicateCheck' => 'getDuplicateCheck',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'encCertificate' => 'getEncCertificate',
            'encPrivateKey' => 'getEncPrivateKey'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['certificateChain'] = isset($data['certificateChain']) ? $data['certificateChain'] : null;
        $this->container['privateKey'] = isset($data['privateKey']) ? $data['privateKey'] : null;
        $this->container['duplicateCheck'] = isset($data['duplicateCheck']) ? $data['duplicateCheck'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['encCertificate'] = isset($data['encCertificate']) ? $data['encCertificate'] : null;
        $this->container['encPrivateKey'] = isset($data['encPrivateKey']) ? $data['encPrivateKey'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 63)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 63.";
            }
            if ((mb_strlen($this->container['name']) < 3)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
            }
        if ($this->container['certificate'] === null) {
            $invalidProperties[] = "'certificate' can't be null";
        }
            if ((mb_strlen($this->container['certificate']) > 4096)) {
                $invalidProperties[] = "invalid value for 'certificate', the character length must be smaller than or equal to 4096.";
            }
            if ((mb_strlen($this->container['certificate']) < 0)) {
                $invalidProperties[] = "invalid value for 'certificate', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['certificateChain']) && (mb_strlen($this->container['certificateChain']) > 8192)) {
                $invalidProperties[] = "invalid value for 'certificateChain', the character length must be smaller than or equal to 8192.";
            }
            if (!is_null($this->container['certificateChain']) && (mb_strlen($this->container['certificateChain']) < 0)) {
                $invalidProperties[] = "invalid value for 'certificateChain', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['privateKey'] === null) {
            $invalidProperties[] = "'privateKey' can't be null";
        }
            if ((mb_strlen($this->container['privateKey']) > 4096)) {
                $invalidProperties[] = "invalid value for 'privateKey', the character length must be smaller than or equal to 4096.";
            }
            if ((mb_strlen($this->container['privateKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateKey', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['encCertificate']) && (mb_strlen($this->container['encCertificate']) > 4096)) {
                $invalidProperties[] = "invalid value for 'encCertificate', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['encCertificate']) && (mb_strlen($this->container['encCertificate']) < 0)) {
                $invalidProperties[] = "invalid value for 'encCertificate', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['encPrivateKey']) && (mb_strlen($this->container['encPrivateKey']) > 4096)) {
                $invalidProperties[] = "invalid value for 'encPrivateKey', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['encPrivateKey']) && (mb_strlen($this->container['encPrivateKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'encPrivateKey', the character length must be bigger than or equal to 0.";
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
    * Gets name
    *  证书名称。字符长度为3~63位, 请输入英文字符，数字，下划线，中划线，英文句点。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 证书名称。字符长度为3~63位, 请输入英文字符，数字，下划线，中划线，英文句点。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets certificate
    *  证书内容，可包含中间证书及根证书。若certificate_chain字段传入证书链，则该字段只取证书本身。回车换行需要使用转义字符\\n或者\\r\\n替换。
    *
    * @return string
    */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
    * Sets certificate
    *
    * @param string $certificate 证书内容，可包含中间证书及根证书。若certificate_chain字段传入证书链，则该字段只取证书本身。回车换行需要使用转义字符\\n或者\\r\\n替换。
    *
    * @return $this
    */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;
        return $this;
    }

    /**
    * Gets certificateChain
    *  证书链，非必填，可通过certificate字段传入。回车换行需要使用转义字符\\n或者\\r\\n替换。
    *
    * @return string|null
    */
    public function getCertificateChain()
    {
        return $this->container['certificateChain'];
    }

    /**
    * Sets certificateChain
    *
    * @param string|null $certificateChain 证书链，非必填，可通过certificate字段传入。回车换行需要使用转义字符\\n或者\\r\\n替换。
    *
    * @return $this
    */
    public function setCertificateChain($certificateChain)
    {
        $this->container['certificateChain'] = $certificateChain;
        return $this;
    }

    /**
    * Gets privateKey
    *  证书私钥。 不能上传带有口令保护的私钥，回车换行需要使用转义字符\\n或者\\r\\n替换。
    *
    * @return string
    */
    public function getPrivateKey()
    {
        return $this->container['privateKey'];
    }

    /**
    * Sets privateKey
    *
    * @param string $privateKey 证书私钥。 不能上传带有口令保护的私钥，回车换行需要使用转义字符\\n或者\\r\\n替换。
    *
    * @return $this
    */
    public function setPrivateKey($privateKey)
    {
        $this->container['privateKey'] = $privateKey;
        return $this;
    }

    /**
    * Gets duplicateCheck
    *  是否允许上传相同证书。 - true：同意上传相同证书。 - false：不同意上传相同证书。
    *
    * @return bool|null
    */
    public function getDuplicateCheck()
    {
        return $this->container['duplicateCheck'];
    }

    /**
    * Sets duplicateCheck
    *
    * @param bool|null $duplicateCheck 是否允许上传相同证书。 - true：同意上传相同证书。 - false：不同意上传相同证书。
    *
    * @return $this
    */
    public function setDuplicateCheck($duplicateCheck)
    {
        $this->container['duplicateCheck'] = $duplicateCheck;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件。 - 取值为“all” - 取值为“0” - 满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
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
    * @param string|null $enterpriseProjectId 企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件。 - 取值为“all” - 取值为“0” - 满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets encCertificate
    *  可选参数，国密证书的加密证书内容。回车换行需要使用转义字符\\n或者\\r\\n替换。
    *
    * @return string|null
    */
    public function getEncCertificate()
    {
        return $this->container['encCertificate'];
    }

    /**
    * Sets encCertificate
    *
    * @param string|null $encCertificate 可选参数，国密证书的加密证书内容。回车换行需要使用转义字符\\n或者\\r\\n替换。
    *
    * @return $this
    */
    public function setEncCertificate($encCertificate)
    {
        $this->container['encCertificate'] = $encCertificate;
        return $this;
    }

    /**
    * Gets encPrivateKey
    *  可选参数，国密证书的加密私钥。 不能上传带有口令保护的私钥，回车换行需要使用转义字符\\n或者\\r\\n替换。
    *
    * @return string|null
    */
    public function getEncPrivateKey()
    {
        return $this->container['encPrivateKey'];
    }

    /**
    * Sets encPrivateKey
    *
    * @param string|null $encPrivateKey 可选参数，国密证书的加密私钥。 不能上传带有口令保护的私钥，回车换行需要使用转义字符\\n或者\\r\\n替换。
    *
    * @return $this
    */
    public function setEncPrivateKey($encPrivateKey)
    {
        $this->container['encPrivateKey'] = $encPrivateKey;
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

