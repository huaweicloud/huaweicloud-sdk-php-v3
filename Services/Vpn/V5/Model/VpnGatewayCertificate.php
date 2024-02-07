<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VpnGatewayCertificate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VpnGatewayCertificate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  VPN网关证书ID
    * name  VPN网关证书名称
    * projectId  租户的项目ID
    * vgwId  VPN网关ID
    * status  网关证书状态
    * issuer  证书颁发者，国密证书时为签名证书颁发者
    * signatureAlgorithm  证书签名算法，国密证书时为签名证书签名算法
    * certificateSerialNumber  证书序列号，国密证书时为签名证书序列号
    * certificateSubject  证书主题，国密证书时为签名证书主题
    * certificateExpireTime  证书过期时间，国密证书时为签名证书过期时间
    * certificateChainSerialNumber  CA证书序列号
    * certificateChainSubject  CA证书主题
    * certificateChainExpireTime  CA证书过期时间
    * encCertificateSerialNumber  国密证书的加密证书序列号，
    * encCertificateSubject  国密证书的加密证书主题
    * encCertificateExpireTime  国密证书的加密证书过期时间
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'projectId' => 'string',
            'vgwId' => 'string',
            'status' => 'string',
            'issuer' => 'string',
            'signatureAlgorithm' => 'string',
            'certificateSerialNumber' => 'string',
            'certificateSubject' => 'string',
            'certificateExpireTime' => '\DateTime',
            'certificateChainSerialNumber' => 'string',
            'certificateChainSubject' => 'string',
            'certificateChainExpireTime' => '\DateTime',
            'encCertificateSerialNumber' => 'string',
            'encCertificateSubject' => 'string',
            'encCertificateExpireTime' => '\DateTime',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  VPN网关证书ID
    * name  VPN网关证书名称
    * projectId  租户的项目ID
    * vgwId  VPN网关ID
    * status  网关证书状态
    * issuer  证书颁发者，国密证书时为签名证书颁发者
    * signatureAlgorithm  证书签名算法，国密证书时为签名证书签名算法
    * certificateSerialNumber  证书序列号，国密证书时为签名证书序列号
    * certificateSubject  证书主题，国密证书时为签名证书主题
    * certificateExpireTime  证书过期时间，国密证书时为签名证书过期时间
    * certificateChainSerialNumber  CA证书序列号
    * certificateChainSubject  CA证书主题
    * certificateChainExpireTime  CA证书过期时间
    * encCertificateSerialNumber  国密证书的加密证书序列号，
    * encCertificateSubject  国密证书的加密证书主题
    * encCertificateExpireTime  国密证书的加密证书过期时间
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'projectId' => null,
        'vgwId' => null,
        'status' => null,
        'issuer' => null,
        'signatureAlgorithm' => null,
        'certificateSerialNumber' => null,
        'certificateSubject' => null,
        'certificateExpireTime' => 'date-time',
        'certificateChainSerialNumber' => null,
        'certificateChainSubject' => null,
        'certificateChainExpireTime' => 'date-time',
        'encCertificateSerialNumber' => null,
        'encCertificateSubject' => null,
        'encCertificateExpireTime' => 'date-time',
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time'
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
    * id  VPN网关证书ID
    * name  VPN网关证书名称
    * projectId  租户的项目ID
    * vgwId  VPN网关ID
    * status  网关证书状态
    * issuer  证书颁发者，国密证书时为签名证书颁发者
    * signatureAlgorithm  证书签名算法，国密证书时为签名证书签名算法
    * certificateSerialNumber  证书序列号，国密证书时为签名证书序列号
    * certificateSubject  证书主题，国密证书时为签名证书主题
    * certificateExpireTime  证书过期时间，国密证书时为签名证书过期时间
    * certificateChainSerialNumber  CA证书序列号
    * certificateChainSubject  CA证书主题
    * certificateChainExpireTime  CA证书过期时间
    * encCertificateSerialNumber  国密证书的加密证书序列号，
    * encCertificateSubject  国密证书的加密证书主题
    * encCertificateExpireTime  国密证书的加密证书过期时间
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'projectId' => 'project_id',
            'vgwId' => 'vgw_id',
            'status' => 'status',
            'issuer' => 'issuer',
            'signatureAlgorithm' => 'signature_algorithm',
            'certificateSerialNumber' => 'certificate_serial_number',
            'certificateSubject' => 'certificate_subject',
            'certificateExpireTime' => 'certificate_expire_time',
            'certificateChainSerialNumber' => 'certificate_chain_serial_number',
            'certificateChainSubject' => 'certificate_chain_subject',
            'certificateChainExpireTime' => 'certificate_chain_expire_time',
            'encCertificateSerialNumber' => 'enc_certificate_serial_number',
            'encCertificateSubject' => 'enc_certificate_subject',
            'encCertificateExpireTime' => 'enc_certificate_expire_time',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  VPN网关证书ID
    * name  VPN网关证书名称
    * projectId  租户的项目ID
    * vgwId  VPN网关ID
    * status  网关证书状态
    * issuer  证书颁发者，国密证书时为签名证书颁发者
    * signatureAlgorithm  证书签名算法，国密证书时为签名证书签名算法
    * certificateSerialNumber  证书序列号，国密证书时为签名证书序列号
    * certificateSubject  证书主题，国密证书时为签名证书主题
    * certificateExpireTime  证书过期时间，国密证书时为签名证书过期时间
    * certificateChainSerialNumber  CA证书序列号
    * certificateChainSubject  CA证书主题
    * certificateChainExpireTime  CA证书过期时间
    * encCertificateSerialNumber  国密证书的加密证书序列号，
    * encCertificateSubject  国密证书的加密证书主题
    * encCertificateExpireTime  国密证书的加密证书过期时间
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'projectId' => 'setProjectId',
            'vgwId' => 'setVgwId',
            'status' => 'setStatus',
            'issuer' => 'setIssuer',
            'signatureAlgorithm' => 'setSignatureAlgorithm',
            'certificateSerialNumber' => 'setCertificateSerialNumber',
            'certificateSubject' => 'setCertificateSubject',
            'certificateExpireTime' => 'setCertificateExpireTime',
            'certificateChainSerialNumber' => 'setCertificateChainSerialNumber',
            'certificateChainSubject' => 'setCertificateChainSubject',
            'certificateChainExpireTime' => 'setCertificateChainExpireTime',
            'encCertificateSerialNumber' => 'setEncCertificateSerialNumber',
            'encCertificateSubject' => 'setEncCertificateSubject',
            'encCertificateExpireTime' => 'setEncCertificateExpireTime',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  VPN网关证书ID
    * name  VPN网关证书名称
    * projectId  租户的项目ID
    * vgwId  VPN网关ID
    * status  网关证书状态
    * issuer  证书颁发者，国密证书时为签名证书颁发者
    * signatureAlgorithm  证书签名算法，国密证书时为签名证书签名算法
    * certificateSerialNumber  证书序列号，国密证书时为签名证书序列号
    * certificateSubject  证书主题，国密证书时为签名证书主题
    * certificateExpireTime  证书过期时间，国密证书时为签名证书过期时间
    * certificateChainSerialNumber  CA证书序列号
    * certificateChainSubject  CA证书主题
    * certificateChainExpireTime  CA证书过期时间
    * encCertificateSerialNumber  国密证书的加密证书序列号，
    * encCertificateSubject  国密证书的加密证书主题
    * encCertificateExpireTime  国密证书的加密证书过期时间
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'projectId' => 'getProjectId',
            'vgwId' => 'getVgwId',
            'status' => 'getStatus',
            'issuer' => 'getIssuer',
            'signatureAlgorithm' => 'getSignatureAlgorithm',
            'certificateSerialNumber' => 'getCertificateSerialNumber',
            'certificateSubject' => 'getCertificateSubject',
            'certificateExpireTime' => 'getCertificateExpireTime',
            'certificateChainSerialNumber' => 'getCertificateChainSerialNumber',
            'certificateChainSubject' => 'getCertificateChainSubject',
            'certificateChainExpireTime' => 'getCertificateChainExpireTime',
            'encCertificateSerialNumber' => 'getEncCertificateSerialNumber',
            'encCertificateSubject' => 'getEncCertificateSubject',
            'encCertificateExpireTime' => 'getEncCertificateExpireTime',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
    const STATUS_BOUND = 'BOUND';
    const STATUS_FAULT = 'FAULT';
    const STATUS_BINDING = 'BINDING';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_BOUND,
            self::STATUS_FAULT,
            self::STATUS_BINDING,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['vgwId'] = isset($data['vgwId']) ? $data['vgwId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['issuer'] = isset($data['issuer']) ? $data['issuer'] : null;
        $this->container['signatureAlgorithm'] = isset($data['signatureAlgorithm']) ? $data['signatureAlgorithm'] : null;
        $this->container['certificateSerialNumber'] = isset($data['certificateSerialNumber']) ? $data['certificateSerialNumber'] : null;
        $this->container['certificateSubject'] = isset($data['certificateSubject']) ? $data['certificateSubject'] : null;
        $this->container['certificateExpireTime'] = isset($data['certificateExpireTime']) ? $data['certificateExpireTime'] : null;
        $this->container['certificateChainSerialNumber'] = isset($data['certificateChainSerialNumber']) ? $data['certificateChainSerialNumber'] : null;
        $this->container['certificateChainSubject'] = isset($data['certificateChainSubject']) ? $data['certificateChainSubject'] : null;
        $this->container['certificateChainExpireTime'] = isset($data['certificateChainExpireTime']) ? $data['certificateChainExpireTime'] : null;
        $this->container['encCertificateSerialNumber'] = isset($data['encCertificateSerialNumber']) ? $data['encCertificateSerialNumber'] : null;
        $this->container['encCertificateSubject'] = isset($data['encCertificateSubject']) ? $data['encCertificateSubject'] : null;
        $this->container['encCertificateExpireTime'] = isset($data['encCertificateExpireTime']) ? $data['encCertificateExpireTime'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vgwId']) && (mb_strlen($this->container['vgwId']) > 64)) {
                $invalidProperties[] = "invalid value for 'vgwId', the character length must be smaller than or equal to 64.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['issuer']) && (mb_strlen($this->container['issuer']) > 256)) {
                $invalidProperties[] = "invalid value for 'issuer', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['signatureAlgorithm']) && (mb_strlen($this->container['signatureAlgorithm']) > 64)) {
                $invalidProperties[] = "invalid value for 'signatureAlgorithm', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['certificateSerialNumber']) && (mb_strlen($this->container['certificateSerialNumber']) > 64)) {
                $invalidProperties[] = "invalid value for 'certificateSerialNumber', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['certificateSubject']) && (mb_strlen($this->container['certificateSubject']) > 256)) {
                $invalidProperties[] = "invalid value for 'certificateSubject', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['certificateChainSerialNumber']) && (mb_strlen($this->container['certificateChainSerialNumber']) > 64)) {
                $invalidProperties[] = "invalid value for 'certificateChainSerialNumber', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['certificateChainSubject']) && (mb_strlen($this->container['certificateChainSubject']) > 256)) {
                $invalidProperties[] = "invalid value for 'certificateChainSubject', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['encCertificateSerialNumber']) && (mb_strlen($this->container['encCertificateSerialNumber']) > 64)) {
                $invalidProperties[] = "invalid value for 'encCertificateSerialNumber', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['encCertificateSubject']) && (mb_strlen($this->container['encCertificateSubject']) > 256)) {
                $invalidProperties[] = "invalid value for 'encCertificateSubject', the character length must be smaller than or equal to 256.";
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
    * Gets id
    *  VPN网关证书ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id VPN网关证书ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  VPN网关证书名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name VPN网关证书名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets projectId
    *  租户的项目ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 租户的项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets vgwId
    *  VPN网关ID
    *
    * @return string|null
    */
    public function getVgwId()
    {
        return $this->container['vgwId'];
    }

    /**
    * Sets vgwId
    *
    * @param string|null $vgwId VPN网关ID
    *
    * @return $this
    */
    public function setVgwId($vgwId)
    {
        $this->container['vgwId'] = $vgwId;
        return $this;
    }

    /**
    * Gets status
    *  网关证书状态
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
    * @param string|null $status 网关证书状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets issuer
    *  证书颁发者，国密证书时为签名证书颁发者
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
    * @param string|null $issuer 证书颁发者，国密证书时为签名证书颁发者
    *
    * @return $this
    */
    public function setIssuer($issuer)
    {
        $this->container['issuer'] = $issuer;
        return $this;
    }

    /**
    * Gets signatureAlgorithm
    *  证书签名算法，国密证书时为签名证书签名算法
    *
    * @return string|null
    */
    public function getSignatureAlgorithm()
    {
        return $this->container['signatureAlgorithm'];
    }

    /**
    * Sets signatureAlgorithm
    *
    * @param string|null $signatureAlgorithm 证书签名算法，国密证书时为签名证书签名算法
    *
    * @return $this
    */
    public function setSignatureAlgorithm($signatureAlgorithm)
    {
        $this->container['signatureAlgorithm'] = $signatureAlgorithm;
        return $this;
    }

    /**
    * Gets certificateSerialNumber
    *  证书序列号，国密证书时为签名证书序列号
    *
    * @return string|null
    */
    public function getCertificateSerialNumber()
    {
        return $this->container['certificateSerialNumber'];
    }

    /**
    * Sets certificateSerialNumber
    *
    * @param string|null $certificateSerialNumber 证书序列号，国密证书时为签名证书序列号
    *
    * @return $this
    */
    public function setCertificateSerialNumber($certificateSerialNumber)
    {
        $this->container['certificateSerialNumber'] = $certificateSerialNumber;
        return $this;
    }

    /**
    * Gets certificateSubject
    *  证书主题，国密证书时为签名证书主题
    *
    * @return string|null
    */
    public function getCertificateSubject()
    {
        return $this->container['certificateSubject'];
    }

    /**
    * Sets certificateSubject
    *
    * @param string|null $certificateSubject 证书主题，国密证书时为签名证书主题
    *
    * @return $this
    */
    public function setCertificateSubject($certificateSubject)
    {
        $this->container['certificateSubject'] = $certificateSubject;
        return $this;
    }

    /**
    * Gets certificateExpireTime
    *  证书过期时间，国密证书时为签名证书过期时间
    *
    * @return \DateTime|null
    */
    public function getCertificateExpireTime()
    {
        return $this->container['certificateExpireTime'];
    }

    /**
    * Sets certificateExpireTime
    *
    * @param \DateTime|null $certificateExpireTime 证书过期时间，国密证书时为签名证书过期时间
    *
    * @return $this
    */
    public function setCertificateExpireTime($certificateExpireTime)
    {
        $this->container['certificateExpireTime'] = $certificateExpireTime;
        return $this;
    }

    /**
    * Gets certificateChainSerialNumber
    *  CA证书序列号
    *
    * @return string|null
    */
    public function getCertificateChainSerialNumber()
    {
        return $this->container['certificateChainSerialNumber'];
    }

    /**
    * Sets certificateChainSerialNumber
    *
    * @param string|null $certificateChainSerialNumber CA证书序列号
    *
    * @return $this
    */
    public function setCertificateChainSerialNumber($certificateChainSerialNumber)
    {
        $this->container['certificateChainSerialNumber'] = $certificateChainSerialNumber;
        return $this;
    }

    /**
    * Gets certificateChainSubject
    *  CA证书主题
    *
    * @return string|null
    */
    public function getCertificateChainSubject()
    {
        return $this->container['certificateChainSubject'];
    }

    /**
    * Sets certificateChainSubject
    *
    * @param string|null $certificateChainSubject CA证书主题
    *
    * @return $this
    */
    public function setCertificateChainSubject($certificateChainSubject)
    {
        $this->container['certificateChainSubject'] = $certificateChainSubject;
        return $this;
    }

    /**
    * Gets certificateChainExpireTime
    *  CA证书过期时间
    *
    * @return \DateTime|null
    */
    public function getCertificateChainExpireTime()
    {
        return $this->container['certificateChainExpireTime'];
    }

    /**
    * Sets certificateChainExpireTime
    *
    * @param \DateTime|null $certificateChainExpireTime CA证书过期时间
    *
    * @return $this
    */
    public function setCertificateChainExpireTime($certificateChainExpireTime)
    {
        $this->container['certificateChainExpireTime'] = $certificateChainExpireTime;
        return $this;
    }

    /**
    * Gets encCertificateSerialNumber
    *  国密证书的加密证书序列号，
    *
    * @return string|null
    */
    public function getEncCertificateSerialNumber()
    {
        return $this->container['encCertificateSerialNumber'];
    }

    /**
    * Sets encCertificateSerialNumber
    *
    * @param string|null $encCertificateSerialNumber 国密证书的加密证书序列号，
    *
    * @return $this
    */
    public function setEncCertificateSerialNumber($encCertificateSerialNumber)
    {
        $this->container['encCertificateSerialNumber'] = $encCertificateSerialNumber;
        return $this;
    }

    /**
    * Gets encCertificateSubject
    *  国密证书的加密证书主题
    *
    * @return string|null
    */
    public function getEncCertificateSubject()
    {
        return $this->container['encCertificateSubject'];
    }

    /**
    * Sets encCertificateSubject
    *
    * @param string|null $encCertificateSubject 国密证书的加密证书主题
    *
    * @return $this
    */
    public function setEncCertificateSubject($encCertificateSubject)
    {
        $this->container['encCertificateSubject'] = $encCertificateSubject;
        return $this;
    }

    /**
    * Gets encCertificateExpireTime
    *  国密证书的加密证书过期时间
    *
    * @return \DateTime|null
    */
    public function getEncCertificateExpireTime()
    {
        return $this->container['encCertificateExpireTime'];
    }

    /**
    * Sets encCertificateExpireTime
    *
    * @param \DateTime|null $encCertificateExpireTime 国密证书的加密证书过期时间
    *
    * @return $this
    */
    public function setEncCertificateExpireTime($encCertificateExpireTime)
    {
        $this->container['encCertificateExpireTime'] = $encCertificateExpireTime;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt 创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间
    *
    * @return \DateTime|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime|null $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

