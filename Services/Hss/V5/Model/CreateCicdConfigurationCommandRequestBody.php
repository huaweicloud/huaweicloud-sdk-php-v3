<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCicdConfigurationCommandRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCicdConfigurationCommandRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scanType  **参数解释**： 扫描类型 **约束限制**: 不涉及 **取值范围**: - local_image：本地镜像，镜像扫描参数 - remote_image：远程镜像仓，镜像扫描参数 - local_directory：本地目录，iac扫描参数 - remote_address：https远程地址 - git_repository_address：git仓库地址  **默认取值**: 不涉及
    * cicdId  **参数解释**： cicd标识 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * imageName  **参数解释**: 镜像名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * imageVersion  **参数解释**: 镜像版本 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * isBlocking  **参数解释**: 流水线是否阻断 **约束限制**: 不涉及 **取值范围**:   - true：流水线被阻断。   - false：流水线未阻断。  **默认取值**: 不涉及
    * repositoryAddress  **参数解释**: 镜像仓地址 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * loginUserName  **参数解释**: 镜像仓登录用户名 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * loginPassword  **参数解释**: 镜像仓登录密码 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * namespace  **参数解释**: 组织名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * isImageScan  **参数解释**: 是否进行镜像扫描 **约束限制**: 不涉及 **取值范围**:   - true：镜像扫描。   - false：不进行镜像扫描。  **默认取值**: 不涉及
    * imageScanInfo  imageScanInfo
    * isIacScan  **参数解释**: 是否进行iac扫描 **约束限制**: 不涉及 **取值范围**:   - true：iac扫描。   - false：不进行iac扫描。  **默认取值**: 不涉及
    * iacScanInfo  iacScanInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scanType' => 'string',
            'cicdId' => 'string',
            'imageName' => 'string',
            'imageVersion' => 'string',
            'isBlocking' => 'bool',
            'repositoryAddress' => 'string',
            'loginUserName' => 'string',
            'loginPassword' => 'string',
            'namespace' => 'string',
            'isImageScan' => 'bool',
            'imageScanInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\ImageScanRequestInfo',
            'isIacScan' => 'bool',
            'iacScanInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\IacScanRequestInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scanType  **参数解释**： 扫描类型 **约束限制**: 不涉及 **取值范围**: - local_image：本地镜像，镜像扫描参数 - remote_image：远程镜像仓，镜像扫描参数 - local_directory：本地目录，iac扫描参数 - remote_address：https远程地址 - git_repository_address：git仓库地址  **默认取值**: 不涉及
    * cicdId  **参数解释**： cicd标识 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * imageName  **参数解释**: 镜像名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * imageVersion  **参数解释**: 镜像版本 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * isBlocking  **参数解释**: 流水线是否阻断 **约束限制**: 不涉及 **取值范围**:   - true：流水线被阻断。   - false：流水线未阻断。  **默认取值**: 不涉及
    * repositoryAddress  **参数解释**: 镜像仓地址 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * loginUserName  **参数解释**: 镜像仓登录用户名 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * loginPassword  **参数解释**: 镜像仓登录密码 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * namespace  **参数解释**: 组织名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * isImageScan  **参数解释**: 是否进行镜像扫描 **约束限制**: 不涉及 **取值范围**:   - true：镜像扫描。   - false：不进行镜像扫描。  **默认取值**: 不涉及
    * imageScanInfo  imageScanInfo
    * isIacScan  **参数解释**: 是否进行iac扫描 **约束限制**: 不涉及 **取值范围**:   - true：iac扫描。   - false：不进行iac扫描。  **默认取值**: 不涉及
    * iacScanInfo  iacScanInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scanType' => null,
        'cicdId' => null,
        'imageName' => null,
        'imageVersion' => null,
        'isBlocking' => null,
        'repositoryAddress' => null,
        'loginUserName' => null,
        'loginPassword' => null,
        'namespace' => null,
        'isImageScan' => null,
        'imageScanInfo' => null,
        'isIacScan' => null,
        'iacScanInfo' => null
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
    * scanType  **参数解释**： 扫描类型 **约束限制**: 不涉及 **取值范围**: - local_image：本地镜像，镜像扫描参数 - remote_image：远程镜像仓，镜像扫描参数 - local_directory：本地目录，iac扫描参数 - remote_address：https远程地址 - git_repository_address：git仓库地址  **默认取值**: 不涉及
    * cicdId  **参数解释**： cicd标识 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * imageName  **参数解释**: 镜像名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * imageVersion  **参数解释**: 镜像版本 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * isBlocking  **参数解释**: 流水线是否阻断 **约束限制**: 不涉及 **取值范围**:   - true：流水线被阻断。   - false：流水线未阻断。  **默认取值**: 不涉及
    * repositoryAddress  **参数解释**: 镜像仓地址 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * loginUserName  **参数解释**: 镜像仓登录用户名 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * loginPassword  **参数解释**: 镜像仓登录密码 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * namespace  **参数解释**: 组织名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * isImageScan  **参数解释**: 是否进行镜像扫描 **约束限制**: 不涉及 **取值范围**:   - true：镜像扫描。   - false：不进行镜像扫描。  **默认取值**: 不涉及
    * imageScanInfo  imageScanInfo
    * isIacScan  **参数解释**: 是否进行iac扫描 **约束限制**: 不涉及 **取值范围**:   - true：iac扫描。   - false：不进行iac扫描。  **默认取值**: 不涉及
    * iacScanInfo  iacScanInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scanType' => 'scan_type',
            'cicdId' => 'cicd_id',
            'imageName' => 'image_name',
            'imageVersion' => 'image_version',
            'isBlocking' => 'is_blocking',
            'repositoryAddress' => 'repository_address',
            'loginUserName' => 'login_user_name',
            'loginPassword' => 'login_password',
            'namespace' => 'namespace',
            'isImageScan' => 'is_image_scan',
            'imageScanInfo' => 'image_scan_info',
            'isIacScan' => 'is_iac_scan',
            'iacScanInfo' => 'iac_scan_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scanType  **参数解释**： 扫描类型 **约束限制**: 不涉及 **取值范围**: - local_image：本地镜像，镜像扫描参数 - remote_image：远程镜像仓，镜像扫描参数 - local_directory：本地目录，iac扫描参数 - remote_address：https远程地址 - git_repository_address：git仓库地址  **默认取值**: 不涉及
    * cicdId  **参数解释**： cicd标识 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * imageName  **参数解释**: 镜像名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * imageVersion  **参数解释**: 镜像版本 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * isBlocking  **参数解释**: 流水线是否阻断 **约束限制**: 不涉及 **取值范围**:   - true：流水线被阻断。   - false：流水线未阻断。  **默认取值**: 不涉及
    * repositoryAddress  **参数解释**: 镜像仓地址 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * loginUserName  **参数解释**: 镜像仓登录用户名 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * loginPassword  **参数解释**: 镜像仓登录密码 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * namespace  **参数解释**: 组织名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * isImageScan  **参数解释**: 是否进行镜像扫描 **约束限制**: 不涉及 **取值范围**:   - true：镜像扫描。   - false：不进行镜像扫描。  **默认取值**: 不涉及
    * imageScanInfo  imageScanInfo
    * isIacScan  **参数解释**: 是否进行iac扫描 **约束限制**: 不涉及 **取值范围**:   - true：iac扫描。   - false：不进行iac扫描。  **默认取值**: 不涉及
    * iacScanInfo  iacScanInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'scanType' => 'setScanType',
            'cicdId' => 'setCicdId',
            'imageName' => 'setImageName',
            'imageVersion' => 'setImageVersion',
            'isBlocking' => 'setIsBlocking',
            'repositoryAddress' => 'setRepositoryAddress',
            'loginUserName' => 'setLoginUserName',
            'loginPassword' => 'setLoginPassword',
            'namespace' => 'setNamespace',
            'isImageScan' => 'setIsImageScan',
            'imageScanInfo' => 'setImageScanInfo',
            'isIacScan' => 'setIsIacScan',
            'iacScanInfo' => 'setIacScanInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scanType  **参数解释**： 扫描类型 **约束限制**: 不涉及 **取值范围**: - local_image：本地镜像，镜像扫描参数 - remote_image：远程镜像仓，镜像扫描参数 - local_directory：本地目录，iac扫描参数 - remote_address：https远程地址 - git_repository_address：git仓库地址  **默认取值**: 不涉及
    * cicdId  **参数解释**： cicd标识 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * imageName  **参数解释**: 镜像名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * imageVersion  **参数解释**: 镜像版本 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * isBlocking  **参数解释**: 流水线是否阻断 **约束限制**: 不涉及 **取值范围**:   - true：流水线被阻断。   - false：流水线未阻断。  **默认取值**: 不涉及
    * repositoryAddress  **参数解释**: 镜像仓地址 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * loginUserName  **参数解释**: 镜像仓登录用户名 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * loginPassword  **参数解释**: 镜像仓登录密码 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * namespace  **参数解释**: 组织名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * isImageScan  **参数解释**: 是否进行镜像扫描 **约束限制**: 不涉及 **取值范围**:   - true：镜像扫描。   - false：不进行镜像扫描。  **默认取值**: 不涉及
    * imageScanInfo  imageScanInfo
    * isIacScan  **参数解释**: 是否进行iac扫描 **约束限制**: 不涉及 **取值范围**:   - true：iac扫描。   - false：不进行iac扫描。  **默认取值**: 不涉及
    * iacScanInfo  iacScanInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'scanType' => 'getScanType',
            'cicdId' => 'getCicdId',
            'imageName' => 'getImageName',
            'imageVersion' => 'getImageVersion',
            'isBlocking' => 'getIsBlocking',
            'repositoryAddress' => 'getRepositoryAddress',
            'loginUserName' => 'getLoginUserName',
            'loginPassword' => 'getLoginPassword',
            'namespace' => 'getNamespace',
            'isImageScan' => 'getIsImageScan',
            'imageScanInfo' => 'getImageScanInfo',
            'isIacScan' => 'getIsIacScan',
            'iacScanInfo' => 'getIacScanInfo'
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
        $this->container['scanType'] = isset($data['scanType']) ? $data['scanType'] : null;
        $this->container['cicdId'] = isset($data['cicdId']) ? $data['cicdId'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['isBlocking'] = isset($data['isBlocking']) ? $data['isBlocking'] : null;
        $this->container['repositoryAddress'] = isset($data['repositoryAddress']) ? $data['repositoryAddress'] : null;
        $this->container['loginUserName'] = isset($data['loginUserName']) ? $data['loginUserName'] : null;
        $this->container['loginPassword'] = isset($data['loginPassword']) ? $data['loginPassword'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['isImageScan'] = isset($data['isImageScan']) ? $data['isImageScan'] : null;
        $this->container['imageScanInfo'] = isset($data['imageScanInfo']) ? $data['imageScanInfo'] : null;
        $this->container['isIacScan'] = isset($data['isIacScan']) ? $data['isIacScan'] : null;
        $this->container['iacScanInfo'] = isset($data['iacScanInfo']) ? $data['iacScanInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['scanType']) && (mb_strlen($this->container['scanType']) > 128)) {
                $invalidProperties[] = "invalid value for 'scanType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['scanType']) && (mb_strlen($this->container['scanType']) < 1)) {
                $invalidProperties[] = "invalid value for 'scanType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scanType']) && !preg_match("/^local_image|remote_image|local_directory|remote_address|git_repository_address$/", $this->container['scanType'])) {
                $invalidProperties[] = "invalid value for 'scanType', must be conform to the pattern /^local_image|remote_image|local_directory|remote_address|git_repository_address$/.";
            }
        if ($this->container['cicdId'] === null) {
            $invalidProperties[] = "'cicdId' can't be null";
        }
            if ((mb_strlen($this->container['cicdId']) > 128)) {
                $invalidProperties[] = "invalid value for 'cicdId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['cicdId']) < 1)) {
                $invalidProperties[] = "invalid value for 'cicdId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['cicdId'])) {
                $invalidProperties[] = "invalid value for 'cicdId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageName']) && !preg_match("/^.*$/", $this->container['imageName'])) {
                $invalidProperties[] = "invalid value for 'imageName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageVersion']) && !preg_match("/^.*$/", $this->container['imageVersion'])) {
                $invalidProperties[] = "invalid value for 'imageVersion', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['repositoryAddress']) && (mb_strlen($this->container['repositoryAddress']) > 128)) {
                $invalidProperties[] = "invalid value for 'repositoryAddress', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['repositoryAddress']) && (mb_strlen($this->container['repositoryAddress']) < 1)) {
                $invalidProperties[] = "invalid value for 'repositoryAddress', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['repositoryAddress']) && !preg_match("/^.*$/", $this->container['repositoryAddress'])) {
                $invalidProperties[] = "invalid value for 'repositoryAddress', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['loginUserName']) && (mb_strlen($this->container['loginUserName']) > 128)) {
                $invalidProperties[] = "invalid value for 'loginUserName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['loginUserName']) && (mb_strlen($this->container['loginUserName']) < 1)) {
                $invalidProperties[] = "invalid value for 'loginUserName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['loginUserName']) && !preg_match("/^.*$/", $this->container['loginUserName'])) {
                $invalidProperties[] = "invalid value for 'loginUserName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['loginPassword']) && (mb_strlen($this->container['loginPassword']) > 128)) {
                $invalidProperties[] = "invalid value for 'loginPassword', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['loginPassword']) && (mb_strlen($this->container['loginPassword']) < 1)) {
                $invalidProperties[] = "invalid value for 'loginPassword', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['loginPassword']) && !preg_match("/^.*$/", $this->container['loginPassword'])) {
                $invalidProperties[] = "invalid value for 'loginPassword', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 128)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 1)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['namespace']) && !preg_match("/^.*$/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /^.*$/.";
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
    * Gets scanType
    *  **参数解释**： 扫描类型 **约束限制**: 不涉及 **取值范围**: - local_image：本地镜像，镜像扫描参数 - remote_image：远程镜像仓，镜像扫描参数 - local_directory：本地目录，iac扫描参数 - remote_address：https远程地址 - git_repository_address：git仓库地址  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getScanType()
    {
        return $this->container['scanType'];
    }

    /**
    * Sets scanType
    *
    * @param string|null $scanType **参数解释**： 扫描类型 **约束限制**: 不涉及 **取值范围**: - local_image：本地镜像，镜像扫描参数 - remote_image：远程镜像仓，镜像扫描参数 - local_directory：本地目录，iac扫描参数 - remote_address：https远程地址 - git_repository_address：git仓库地址  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setScanType($scanType)
    {
        $this->container['scanType'] = $scanType;
        return $this;
    }

    /**
    * Gets cicdId
    *  **参数解释**： cicd标识 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getCicdId()
    {
        return $this->container['cicdId'];
    }

    /**
    * Sets cicdId
    *
    * @param string $cicdId **参数解释**： cicd标识 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setCicdId($cicdId)
    {
        $this->container['cicdId'] = $cicdId;
        return $this;
    }

    /**
    * Gets imageName
    *  **参数解释**: 镜像名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
    * Sets imageName
    *
    * @param string|null $imageName **参数解释**: 镜像名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets imageVersion
    *  **参数解释**: 镜像版本 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getImageVersion()
    {
        return $this->container['imageVersion'];
    }

    /**
    * Sets imageVersion
    *
    * @param string|null $imageVersion **参数解释**: 镜像版本 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setImageVersion($imageVersion)
    {
        $this->container['imageVersion'] = $imageVersion;
        return $this;
    }

    /**
    * Gets isBlocking
    *  **参数解释**: 流水线是否阻断 **约束限制**: 不涉及 **取值范围**:   - true：流水线被阻断。   - false：流水线未阻断。  **默认取值**: 不涉及
    *
    * @return bool|null
    */
    public function getIsBlocking()
    {
        return $this->container['isBlocking'];
    }

    /**
    * Sets isBlocking
    *
    * @param bool|null $isBlocking **参数解释**: 流水线是否阻断 **约束限制**: 不涉及 **取值范围**:   - true：流水线被阻断。   - false：流水线未阻断。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setIsBlocking($isBlocking)
    {
        $this->container['isBlocking'] = $isBlocking;
        return $this;
    }

    /**
    * Gets repositoryAddress
    *  **参数解释**: 镜像仓地址 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getRepositoryAddress()
    {
        return $this->container['repositoryAddress'];
    }

    /**
    * Sets repositoryAddress
    *
    * @param string|null $repositoryAddress **参数解释**: 镜像仓地址 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setRepositoryAddress($repositoryAddress)
    {
        $this->container['repositoryAddress'] = $repositoryAddress;
        return $this;
    }

    /**
    * Gets loginUserName
    *  **参数解释**: 镜像仓登录用户名 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getLoginUserName()
    {
        return $this->container['loginUserName'];
    }

    /**
    * Sets loginUserName
    *
    * @param string|null $loginUserName **参数解释**: 镜像仓登录用户名 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setLoginUserName($loginUserName)
    {
        $this->container['loginUserName'] = $loginUserName;
        return $this;
    }

    /**
    * Gets loginPassword
    *  **参数解释**: 镜像仓登录密码 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getLoginPassword()
    {
        return $this->container['loginPassword'];
    }

    /**
    * Sets loginPassword
    *
    * @param string|null $loginPassword **参数解释**: 镜像仓登录密码 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setLoginPassword($loginPassword)
    {
        $this->container['loginPassword'] = $loginPassword;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释**: 组织名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace **参数解释**: 组织名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets isImageScan
    *  **参数解释**: 是否进行镜像扫描 **约束限制**: 不涉及 **取值范围**:   - true：镜像扫描。   - false：不进行镜像扫描。  **默认取值**: 不涉及
    *
    * @return bool|null
    */
    public function getIsImageScan()
    {
        return $this->container['isImageScan'];
    }

    /**
    * Sets isImageScan
    *
    * @param bool|null $isImageScan **参数解释**: 是否进行镜像扫描 **约束限制**: 不涉及 **取值范围**:   - true：镜像扫描。   - false：不进行镜像扫描。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setIsImageScan($isImageScan)
    {
        $this->container['isImageScan'] = $isImageScan;
        return $this;
    }

    /**
    * Gets imageScanInfo
    *  imageScanInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ImageScanRequestInfo|null
    */
    public function getImageScanInfo()
    {
        return $this->container['imageScanInfo'];
    }

    /**
    * Sets imageScanInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ImageScanRequestInfo|null $imageScanInfo imageScanInfo
    *
    * @return $this
    */
    public function setImageScanInfo($imageScanInfo)
    {
        $this->container['imageScanInfo'] = $imageScanInfo;
        return $this;
    }

    /**
    * Gets isIacScan
    *  **参数解释**: 是否进行iac扫描 **约束限制**: 不涉及 **取值范围**:   - true：iac扫描。   - false：不进行iac扫描。  **默认取值**: 不涉及
    *
    * @return bool|null
    */
    public function getIsIacScan()
    {
        return $this->container['isIacScan'];
    }

    /**
    * Sets isIacScan
    *
    * @param bool|null $isIacScan **参数解释**: 是否进行iac扫描 **约束限制**: 不涉及 **取值范围**:   - true：iac扫描。   - false：不进行iac扫描。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setIsIacScan($isIacScan)
    {
        $this->container['isIacScan'] = $isIacScan;
        return $this;
    }

    /**
    * Gets iacScanInfo
    *  iacScanInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\IacScanRequestInfo|null
    */
    public function getIacScanInfo()
    {
        return $this->container['iacScanInfo'];
    }

    /**
    * Sets iacScanInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\IacScanRequestInfo|null $iacScanInfo iacScanInfo
    *
    * @return $this
    */
    public function setIacScanInfo($iacScanInfo)
    {
        $this->container['iacScanInfo'] = $iacScanInfo;
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

