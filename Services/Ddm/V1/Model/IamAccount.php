<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IamAccount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IamAccount';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * iamUser  iam账号。
    * iamUserId  iam账号id。
    * userAccount  iam账号权限。
    * iamToken  iam账号token。
    * iamDomain  iamdomain账号。
    * iamDomainId  iamdomain账号id。
    * iamXDomainId  iamxdomain账号id。
    * iamXDomainType  iamxdomain账号类型。
    * iamProjectId  iam项目id。
    * iamProjectName  iam项目名称。
    * language  语言。
    * instanceId  实例id。
    * assumedByDomainId  assumed_by_domain_id。
    * assumedByUserId  assumed_by_user_id。
    * assumedByUserName  assumed_by_user_name。
    * roles  角色信息。
    * exclusiveProjectId  exclusive_project_id。
    * epsEnable  是否支持eps。
    * sharedProjectName  shared_project_name。
    * authorization  authorization。
    * contextAttributes  文本属性。
    * userProfile  用户文件。
    * stsToken  sts_token。
    * accessKeyId  access_key_id。
    * secretAccessKey  secret_access_key。
    * sourceAccount  source_account。
    * sourceUrn  source_urn。
    * requestProof  request_proof。
    * xProjectId  x_project_id。
    * fulfillmentAgency  fulfillment_agency。
    * operationId  operation_id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'iamUser' => 'string',
            'iamUserId' => 'string',
            'userAccount' => 'string',
            'iamToken' => 'string',
            'iamDomain' => 'string',
            'iamDomainId' => 'string',
            'iamXDomainId' => 'string',
            'iamXDomainType' => 'string',
            'iamProjectId' => 'string',
            'iamProjectName' => 'string',
            'language' => 'string',
            'instanceId' => 'string',
            'assumedByDomainId' => 'string',
            'assumedByUserId' => 'string',
            'assumedByUserName' => 'string',
            'roles' => 'string[]',
            'exclusiveProjectId' => 'string',
            'epsEnable' => 'bool',
            'sharedProjectName' => 'string',
            'authorization' => 'string',
            'contextAttributes' => 'string',
            'userProfile' => 'string',
            'stsToken' => 'string',
            'accessKeyId' => 'string',
            'secretAccessKey' => 'string',
            'sourceAccount' => 'string',
            'sourceUrn' => 'string',
            'requestProof' => 'string',
            'xProjectId' => 'string',
            'fulfillmentAgency' => 'string',
            'operationId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * iamUser  iam账号。
    * iamUserId  iam账号id。
    * userAccount  iam账号权限。
    * iamToken  iam账号token。
    * iamDomain  iamdomain账号。
    * iamDomainId  iamdomain账号id。
    * iamXDomainId  iamxdomain账号id。
    * iamXDomainType  iamxdomain账号类型。
    * iamProjectId  iam项目id。
    * iamProjectName  iam项目名称。
    * language  语言。
    * instanceId  实例id。
    * assumedByDomainId  assumed_by_domain_id。
    * assumedByUserId  assumed_by_user_id。
    * assumedByUserName  assumed_by_user_name。
    * roles  角色信息。
    * exclusiveProjectId  exclusive_project_id。
    * epsEnable  是否支持eps。
    * sharedProjectName  shared_project_name。
    * authorization  authorization。
    * contextAttributes  文本属性。
    * userProfile  用户文件。
    * stsToken  sts_token。
    * accessKeyId  access_key_id。
    * secretAccessKey  secret_access_key。
    * sourceAccount  source_account。
    * sourceUrn  source_urn。
    * requestProof  request_proof。
    * xProjectId  x_project_id。
    * fulfillmentAgency  fulfillment_agency。
    * operationId  operation_id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'iamUser' => null,
        'iamUserId' => null,
        'userAccount' => null,
        'iamToken' => null,
        'iamDomain' => null,
        'iamDomainId' => null,
        'iamXDomainId' => null,
        'iamXDomainType' => null,
        'iamProjectId' => null,
        'iamProjectName' => null,
        'language' => null,
        'instanceId' => null,
        'assumedByDomainId' => null,
        'assumedByUserId' => null,
        'assumedByUserName' => null,
        'roles' => null,
        'exclusiveProjectId' => null,
        'epsEnable' => null,
        'sharedProjectName' => null,
        'authorization' => null,
        'contextAttributes' => null,
        'userProfile' => null,
        'stsToken' => null,
        'accessKeyId' => null,
        'secretAccessKey' => null,
        'sourceAccount' => null,
        'sourceUrn' => null,
        'requestProof' => null,
        'xProjectId' => null,
        'fulfillmentAgency' => null,
        'operationId' => null
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
    * iamUser  iam账号。
    * iamUserId  iam账号id。
    * userAccount  iam账号权限。
    * iamToken  iam账号token。
    * iamDomain  iamdomain账号。
    * iamDomainId  iamdomain账号id。
    * iamXDomainId  iamxdomain账号id。
    * iamXDomainType  iamxdomain账号类型。
    * iamProjectId  iam项目id。
    * iamProjectName  iam项目名称。
    * language  语言。
    * instanceId  实例id。
    * assumedByDomainId  assumed_by_domain_id。
    * assumedByUserId  assumed_by_user_id。
    * assumedByUserName  assumed_by_user_name。
    * roles  角色信息。
    * exclusiveProjectId  exclusive_project_id。
    * epsEnable  是否支持eps。
    * sharedProjectName  shared_project_name。
    * authorization  authorization。
    * contextAttributes  文本属性。
    * userProfile  用户文件。
    * stsToken  sts_token。
    * accessKeyId  access_key_id。
    * secretAccessKey  secret_access_key。
    * sourceAccount  source_account。
    * sourceUrn  source_urn。
    * requestProof  request_proof。
    * xProjectId  x_project_id。
    * fulfillmentAgency  fulfillment_agency。
    * operationId  operation_id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'iamUser' => 'iam_user',
            'iamUserId' => 'iam_user_id',
            'userAccount' => 'user_account',
            'iamToken' => 'iam_token',
            'iamDomain' => 'iam_domain',
            'iamDomainId' => 'iam_domain_id',
            'iamXDomainId' => 'iam_x_domain_id',
            'iamXDomainType' => 'iam_x_domain_type',
            'iamProjectId' => 'iam_project_id',
            'iamProjectName' => 'iam_project_name',
            'language' => 'language',
            'instanceId' => 'instance_id',
            'assumedByDomainId' => 'assumed_by_domain_id',
            'assumedByUserId' => 'assumed_by_user_id',
            'assumedByUserName' => 'assumed_by_user_name',
            'roles' => 'roles',
            'exclusiveProjectId' => 'exclusive_project_id',
            'epsEnable' => 'eps_enable',
            'sharedProjectName' => 'shared_project_name',
            'authorization' => 'authorization',
            'contextAttributes' => 'context_attributes',
            'userProfile' => 'user_profile',
            'stsToken' => 'sts_token',
            'accessKeyId' => 'access_key_id',
            'secretAccessKey' => 'secret_access_key',
            'sourceAccount' => 'source_account',
            'sourceUrn' => 'source_urn',
            'requestProof' => 'request_proof',
            'xProjectId' => 'x_project_id',
            'fulfillmentAgency' => 'fulfillment_agency',
            'operationId' => 'operation_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * iamUser  iam账号。
    * iamUserId  iam账号id。
    * userAccount  iam账号权限。
    * iamToken  iam账号token。
    * iamDomain  iamdomain账号。
    * iamDomainId  iamdomain账号id。
    * iamXDomainId  iamxdomain账号id。
    * iamXDomainType  iamxdomain账号类型。
    * iamProjectId  iam项目id。
    * iamProjectName  iam项目名称。
    * language  语言。
    * instanceId  实例id。
    * assumedByDomainId  assumed_by_domain_id。
    * assumedByUserId  assumed_by_user_id。
    * assumedByUserName  assumed_by_user_name。
    * roles  角色信息。
    * exclusiveProjectId  exclusive_project_id。
    * epsEnable  是否支持eps。
    * sharedProjectName  shared_project_name。
    * authorization  authorization。
    * contextAttributes  文本属性。
    * userProfile  用户文件。
    * stsToken  sts_token。
    * accessKeyId  access_key_id。
    * secretAccessKey  secret_access_key。
    * sourceAccount  source_account。
    * sourceUrn  source_urn。
    * requestProof  request_proof。
    * xProjectId  x_project_id。
    * fulfillmentAgency  fulfillment_agency。
    * operationId  operation_id。
    *
    * @var string[]
    */
    protected static $setters = [
            'iamUser' => 'setIamUser',
            'iamUserId' => 'setIamUserId',
            'userAccount' => 'setUserAccount',
            'iamToken' => 'setIamToken',
            'iamDomain' => 'setIamDomain',
            'iamDomainId' => 'setIamDomainId',
            'iamXDomainId' => 'setIamXDomainId',
            'iamXDomainType' => 'setIamXDomainType',
            'iamProjectId' => 'setIamProjectId',
            'iamProjectName' => 'setIamProjectName',
            'language' => 'setLanguage',
            'instanceId' => 'setInstanceId',
            'assumedByDomainId' => 'setAssumedByDomainId',
            'assumedByUserId' => 'setAssumedByUserId',
            'assumedByUserName' => 'setAssumedByUserName',
            'roles' => 'setRoles',
            'exclusiveProjectId' => 'setExclusiveProjectId',
            'epsEnable' => 'setEpsEnable',
            'sharedProjectName' => 'setSharedProjectName',
            'authorization' => 'setAuthorization',
            'contextAttributes' => 'setContextAttributes',
            'userProfile' => 'setUserProfile',
            'stsToken' => 'setStsToken',
            'accessKeyId' => 'setAccessKeyId',
            'secretAccessKey' => 'setSecretAccessKey',
            'sourceAccount' => 'setSourceAccount',
            'sourceUrn' => 'setSourceUrn',
            'requestProof' => 'setRequestProof',
            'xProjectId' => 'setXProjectId',
            'fulfillmentAgency' => 'setFulfillmentAgency',
            'operationId' => 'setOperationId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * iamUser  iam账号。
    * iamUserId  iam账号id。
    * userAccount  iam账号权限。
    * iamToken  iam账号token。
    * iamDomain  iamdomain账号。
    * iamDomainId  iamdomain账号id。
    * iamXDomainId  iamxdomain账号id。
    * iamXDomainType  iamxdomain账号类型。
    * iamProjectId  iam项目id。
    * iamProjectName  iam项目名称。
    * language  语言。
    * instanceId  实例id。
    * assumedByDomainId  assumed_by_domain_id。
    * assumedByUserId  assumed_by_user_id。
    * assumedByUserName  assumed_by_user_name。
    * roles  角色信息。
    * exclusiveProjectId  exclusive_project_id。
    * epsEnable  是否支持eps。
    * sharedProjectName  shared_project_name。
    * authorization  authorization。
    * contextAttributes  文本属性。
    * userProfile  用户文件。
    * stsToken  sts_token。
    * accessKeyId  access_key_id。
    * secretAccessKey  secret_access_key。
    * sourceAccount  source_account。
    * sourceUrn  source_urn。
    * requestProof  request_proof。
    * xProjectId  x_project_id。
    * fulfillmentAgency  fulfillment_agency。
    * operationId  operation_id。
    *
    * @var string[]
    */
    protected static $getters = [
            'iamUser' => 'getIamUser',
            'iamUserId' => 'getIamUserId',
            'userAccount' => 'getUserAccount',
            'iamToken' => 'getIamToken',
            'iamDomain' => 'getIamDomain',
            'iamDomainId' => 'getIamDomainId',
            'iamXDomainId' => 'getIamXDomainId',
            'iamXDomainType' => 'getIamXDomainType',
            'iamProjectId' => 'getIamProjectId',
            'iamProjectName' => 'getIamProjectName',
            'language' => 'getLanguage',
            'instanceId' => 'getInstanceId',
            'assumedByDomainId' => 'getAssumedByDomainId',
            'assumedByUserId' => 'getAssumedByUserId',
            'assumedByUserName' => 'getAssumedByUserName',
            'roles' => 'getRoles',
            'exclusiveProjectId' => 'getExclusiveProjectId',
            'epsEnable' => 'getEpsEnable',
            'sharedProjectName' => 'getSharedProjectName',
            'authorization' => 'getAuthorization',
            'contextAttributes' => 'getContextAttributes',
            'userProfile' => 'getUserProfile',
            'stsToken' => 'getStsToken',
            'accessKeyId' => 'getAccessKeyId',
            'secretAccessKey' => 'getSecretAccessKey',
            'sourceAccount' => 'getSourceAccount',
            'sourceUrn' => 'getSourceUrn',
            'requestProof' => 'getRequestProof',
            'xProjectId' => 'getXProjectId',
            'fulfillmentAgency' => 'getFulfillmentAgency',
            'operationId' => 'getOperationId'
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
        $this->container['iamUser'] = isset($data['iamUser']) ? $data['iamUser'] : null;
        $this->container['iamUserId'] = isset($data['iamUserId']) ? $data['iamUserId'] : null;
        $this->container['userAccount'] = isset($data['userAccount']) ? $data['userAccount'] : null;
        $this->container['iamToken'] = isset($data['iamToken']) ? $data['iamToken'] : null;
        $this->container['iamDomain'] = isset($data['iamDomain']) ? $data['iamDomain'] : null;
        $this->container['iamDomainId'] = isset($data['iamDomainId']) ? $data['iamDomainId'] : null;
        $this->container['iamXDomainId'] = isset($data['iamXDomainId']) ? $data['iamXDomainId'] : null;
        $this->container['iamXDomainType'] = isset($data['iamXDomainType']) ? $data['iamXDomainType'] : null;
        $this->container['iamProjectId'] = isset($data['iamProjectId']) ? $data['iamProjectId'] : null;
        $this->container['iamProjectName'] = isset($data['iamProjectName']) ? $data['iamProjectName'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['assumedByDomainId'] = isset($data['assumedByDomainId']) ? $data['assumedByDomainId'] : null;
        $this->container['assumedByUserId'] = isset($data['assumedByUserId']) ? $data['assumedByUserId'] : null;
        $this->container['assumedByUserName'] = isset($data['assumedByUserName']) ? $data['assumedByUserName'] : null;
        $this->container['roles'] = isset($data['roles']) ? $data['roles'] : null;
        $this->container['exclusiveProjectId'] = isset($data['exclusiveProjectId']) ? $data['exclusiveProjectId'] : null;
        $this->container['epsEnable'] = isset($data['epsEnable']) ? $data['epsEnable'] : null;
        $this->container['sharedProjectName'] = isset($data['sharedProjectName']) ? $data['sharedProjectName'] : null;
        $this->container['authorization'] = isset($data['authorization']) ? $data['authorization'] : null;
        $this->container['contextAttributes'] = isset($data['contextAttributes']) ? $data['contextAttributes'] : null;
        $this->container['userProfile'] = isset($data['userProfile']) ? $data['userProfile'] : null;
        $this->container['stsToken'] = isset($data['stsToken']) ? $data['stsToken'] : null;
        $this->container['accessKeyId'] = isset($data['accessKeyId']) ? $data['accessKeyId'] : null;
        $this->container['secretAccessKey'] = isset($data['secretAccessKey']) ? $data['secretAccessKey'] : null;
        $this->container['sourceAccount'] = isset($data['sourceAccount']) ? $data['sourceAccount'] : null;
        $this->container['sourceUrn'] = isset($data['sourceUrn']) ? $data['sourceUrn'] : null;
        $this->container['requestProof'] = isset($data['requestProof']) ? $data['requestProof'] : null;
        $this->container['xProjectId'] = isset($data['xProjectId']) ? $data['xProjectId'] : null;
        $this->container['fulfillmentAgency'] = isset($data['fulfillmentAgency']) ? $data['fulfillmentAgency'] : null;
        $this->container['operationId'] = isset($data['operationId']) ? $data['operationId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['iamUser']) && (mb_strlen($this->container['iamUser']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'iamUser', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['iamUser']) && (mb_strlen($this->container['iamUser']) < 1)) {
                $invalidProperties[] = "invalid value for 'iamUser', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['iamUserId']) && (mb_strlen($this->container['iamUserId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'iamUserId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['iamUserId']) && (mb_strlen($this->container['iamUserId']) < 1)) {
                $invalidProperties[] = "invalid value for 'iamUserId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userAccount']) && (mb_strlen($this->container['userAccount']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'userAccount', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['userAccount']) && (mb_strlen($this->container['userAccount']) < 1)) {
                $invalidProperties[] = "invalid value for 'userAccount', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['iamToken']) && (mb_strlen($this->container['iamToken']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'iamToken', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['iamToken']) && (mb_strlen($this->container['iamToken']) < 1)) {
                $invalidProperties[] = "invalid value for 'iamToken', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['iamDomain']) && (mb_strlen($this->container['iamDomain']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'iamDomain', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['iamDomain']) && (mb_strlen($this->container['iamDomain']) < 1)) {
                $invalidProperties[] = "invalid value for 'iamDomain', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['iamDomainId']) && (mb_strlen($this->container['iamDomainId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'iamDomainId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['iamDomainId']) && (mb_strlen($this->container['iamDomainId']) < 1)) {
                $invalidProperties[] = "invalid value for 'iamDomainId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['iamXDomainId']) && (mb_strlen($this->container['iamXDomainId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'iamXDomainId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['iamXDomainId']) && (mb_strlen($this->container['iamXDomainId']) < 1)) {
                $invalidProperties[] = "invalid value for 'iamXDomainId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['iamXDomainType']) && (mb_strlen($this->container['iamXDomainType']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'iamXDomainType', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['iamXDomainType']) && (mb_strlen($this->container['iamXDomainType']) < 1)) {
                $invalidProperties[] = "invalid value for 'iamXDomainType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['iamProjectId']) && (mb_strlen($this->container['iamProjectId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'iamProjectId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['iamProjectId']) && (mb_strlen($this->container['iamProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'iamProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['iamProjectName']) && (mb_strlen($this->container['iamProjectName']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'iamProjectName', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['iamProjectName']) && (mb_strlen($this->container['iamProjectName']) < 1)) {
                $invalidProperties[] = "invalid value for 'iamProjectName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) < 1)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assumedByDomainId']) && (mb_strlen($this->container['assumedByDomainId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'assumedByDomainId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['assumedByDomainId']) && (mb_strlen($this->container['assumedByDomainId']) < 1)) {
                $invalidProperties[] = "invalid value for 'assumedByDomainId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assumedByUserId']) && (mb_strlen($this->container['assumedByUserId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'assumedByUserId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['assumedByUserId']) && (mb_strlen($this->container['assumedByUserId']) < 1)) {
                $invalidProperties[] = "invalid value for 'assumedByUserId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assumedByUserName']) && (mb_strlen($this->container['assumedByUserName']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'assumedByUserName', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['assumedByUserName']) && (mb_strlen($this->container['assumedByUserName']) < 1)) {
                $invalidProperties[] = "invalid value for 'assumedByUserName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['exclusiveProjectId']) && (mb_strlen($this->container['exclusiveProjectId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'exclusiveProjectId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['exclusiveProjectId']) && (mb_strlen($this->container['exclusiveProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'exclusiveProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sharedProjectName']) && (mb_strlen($this->container['sharedProjectName']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'sharedProjectName', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['sharedProjectName']) && (mb_strlen($this->container['sharedProjectName']) < 1)) {
                $invalidProperties[] = "invalid value for 'sharedProjectName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['authorization']) && (mb_strlen($this->container['authorization']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'authorization', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['authorization']) && (mb_strlen($this->container['authorization']) < 1)) {
                $invalidProperties[] = "invalid value for 'authorization', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['contextAttributes']) && (mb_strlen($this->container['contextAttributes']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'contextAttributes', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['contextAttributes']) && (mb_strlen($this->container['contextAttributes']) < 1)) {
                $invalidProperties[] = "invalid value for 'contextAttributes', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userProfile']) && (mb_strlen($this->container['userProfile']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'userProfile', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['userProfile']) && (mb_strlen($this->container['userProfile']) < 1)) {
                $invalidProperties[] = "invalid value for 'userProfile', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['stsToken']) && (mb_strlen($this->container['stsToken']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'stsToken', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['stsToken']) && (mb_strlen($this->container['stsToken']) < 1)) {
                $invalidProperties[] = "invalid value for 'stsToken', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['accessKeyId']) && (mb_strlen($this->container['accessKeyId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'accessKeyId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['accessKeyId']) && (mb_strlen($this->container['accessKeyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'accessKeyId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['secretAccessKey']) && (mb_strlen($this->container['secretAccessKey']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'secretAccessKey', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['secretAccessKey']) && (mb_strlen($this->container['secretAccessKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'secretAccessKey', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sourceAccount']) && (mb_strlen($this->container['sourceAccount']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'sourceAccount', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['sourceAccount']) && (mb_strlen($this->container['sourceAccount']) < 1)) {
                $invalidProperties[] = "invalid value for 'sourceAccount', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sourceUrn']) && (mb_strlen($this->container['sourceUrn']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'sourceUrn', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['sourceUrn']) && (mb_strlen($this->container['sourceUrn']) < 1)) {
                $invalidProperties[] = "invalid value for 'sourceUrn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['requestProof']) && (mb_strlen($this->container['requestProof']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'requestProof', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['requestProof']) && (mb_strlen($this->container['requestProof']) < 1)) {
                $invalidProperties[] = "invalid value for 'requestProof', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['xProjectId']) && (mb_strlen($this->container['xProjectId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'xProjectId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['xProjectId']) && (mb_strlen($this->container['xProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'xProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fulfillmentAgency']) && (mb_strlen($this->container['fulfillmentAgency']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'fulfillmentAgency', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['fulfillmentAgency']) && (mb_strlen($this->container['fulfillmentAgency']) < 1)) {
                $invalidProperties[] = "invalid value for 'fulfillmentAgency', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['operationId']) && (mb_strlen($this->container['operationId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'operationId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['operationId']) && (mb_strlen($this->container['operationId']) < 1)) {
                $invalidProperties[] = "invalid value for 'operationId', the character length must be bigger than or equal to 1.";
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
    * Gets iamUser
    *  iam账号。
    *
    * @return string|null
    */
    public function getIamUser()
    {
        return $this->container['iamUser'];
    }

    /**
    * Sets iamUser
    *
    * @param string|null $iamUser iam账号。
    *
    * @return $this
    */
    public function setIamUser($iamUser)
    {
        $this->container['iamUser'] = $iamUser;
        return $this;
    }

    /**
    * Gets iamUserId
    *  iam账号id。
    *
    * @return string|null
    */
    public function getIamUserId()
    {
        return $this->container['iamUserId'];
    }

    /**
    * Sets iamUserId
    *
    * @param string|null $iamUserId iam账号id。
    *
    * @return $this
    */
    public function setIamUserId($iamUserId)
    {
        $this->container['iamUserId'] = $iamUserId;
        return $this;
    }

    /**
    * Gets userAccount
    *  iam账号权限。
    *
    * @return string|null
    */
    public function getUserAccount()
    {
        return $this->container['userAccount'];
    }

    /**
    * Sets userAccount
    *
    * @param string|null $userAccount iam账号权限。
    *
    * @return $this
    */
    public function setUserAccount($userAccount)
    {
        $this->container['userAccount'] = $userAccount;
        return $this;
    }

    /**
    * Gets iamToken
    *  iam账号token。
    *
    * @return string|null
    */
    public function getIamToken()
    {
        return $this->container['iamToken'];
    }

    /**
    * Sets iamToken
    *
    * @param string|null $iamToken iam账号token。
    *
    * @return $this
    */
    public function setIamToken($iamToken)
    {
        $this->container['iamToken'] = $iamToken;
        return $this;
    }

    /**
    * Gets iamDomain
    *  iamdomain账号。
    *
    * @return string|null
    */
    public function getIamDomain()
    {
        return $this->container['iamDomain'];
    }

    /**
    * Sets iamDomain
    *
    * @param string|null $iamDomain iamdomain账号。
    *
    * @return $this
    */
    public function setIamDomain($iamDomain)
    {
        $this->container['iamDomain'] = $iamDomain;
        return $this;
    }

    /**
    * Gets iamDomainId
    *  iamdomain账号id。
    *
    * @return string|null
    */
    public function getIamDomainId()
    {
        return $this->container['iamDomainId'];
    }

    /**
    * Sets iamDomainId
    *
    * @param string|null $iamDomainId iamdomain账号id。
    *
    * @return $this
    */
    public function setIamDomainId($iamDomainId)
    {
        $this->container['iamDomainId'] = $iamDomainId;
        return $this;
    }

    /**
    * Gets iamXDomainId
    *  iamxdomain账号id。
    *
    * @return string|null
    */
    public function getIamXDomainId()
    {
        return $this->container['iamXDomainId'];
    }

    /**
    * Sets iamXDomainId
    *
    * @param string|null $iamXDomainId iamxdomain账号id。
    *
    * @return $this
    */
    public function setIamXDomainId($iamXDomainId)
    {
        $this->container['iamXDomainId'] = $iamXDomainId;
        return $this;
    }

    /**
    * Gets iamXDomainType
    *  iamxdomain账号类型。
    *
    * @return string|null
    */
    public function getIamXDomainType()
    {
        return $this->container['iamXDomainType'];
    }

    /**
    * Sets iamXDomainType
    *
    * @param string|null $iamXDomainType iamxdomain账号类型。
    *
    * @return $this
    */
    public function setIamXDomainType($iamXDomainType)
    {
        $this->container['iamXDomainType'] = $iamXDomainType;
        return $this;
    }

    /**
    * Gets iamProjectId
    *  iam项目id。
    *
    * @return string|null
    */
    public function getIamProjectId()
    {
        return $this->container['iamProjectId'];
    }

    /**
    * Sets iamProjectId
    *
    * @param string|null $iamProjectId iam项目id。
    *
    * @return $this
    */
    public function setIamProjectId($iamProjectId)
    {
        $this->container['iamProjectId'] = $iamProjectId;
        return $this;
    }

    /**
    * Gets iamProjectName
    *  iam项目名称。
    *
    * @return string|null
    */
    public function getIamProjectName()
    {
        return $this->container['iamProjectName'];
    }

    /**
    * Sets iamProjectName
    *
    * @param string|null $iamProjectName iam项目名称。
    *
    * @return $this
    */
    public function setIamProjectName($iamProjectName)
    {
        $this->container['iamProjectName'] = $iamProjectName;
        return $this;
    }

    /**
    * Gets language
    *  语言。
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language 语言。
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例id。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例id。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets assumedByDomainId
    *  assumed_by_domain_id。
    *
    * @return string|null
    */
    public function getAssumedByDomainId()
    {
        return $this->container['assumedByDomainId'];
    }

    /**
    * Sets assumedByDomainId
    *
    * @param string|null $assumedByDomainId assumed_by_domain_id。
    *
    * @return $this
    */
    public function setAssumedByDomainId($assumedByDomainId)
    {
        $this->container['assumedByDomainId'] = $assumedByDomainId;
        return $this;
    }

    /**
    * Gets assumedByUserId
    *  assumed_by_user_id。
    *
    * @return string|null
    */
    public function getAssumedByUserId()
    {
        return $this->container['assumedByUserId'];
    }

    /**
    * Sets assumedByUserId
    *
    * @param string|null $assumedByUserId assumed_by_user_id。
    *
    * @return $this
    */
    public function setAssumedByUserId($assumedByUserId)
    {
        $this->container['assumedByUserId'] = $assumedByUserId;
        return $this;
    }

    /**
    * Gets assumedByUserName
    *  assumed_by_user_name。
    *
    * @return string|null
    */
    public function getAssumedByUserName()
    {
        return $this->container['assumedByUserName'];
    }

    /**
    * Sets assumedByUserName
    *
    * @param string|null $assumedByUserName assumed_by_user_name。
    *
    * @return $this
    */
    public function setAssumedByUserName($assumedByUserName)
    {
        $this->container['assumedByUserName'] = $assumedByUserName;
        return $this;
    }

    /**
    * Gets roles
    *  角色信息。
    *
    * @return string[]|null
    */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
    * Sets roles
    *
    * @param string[]|null $roles 角色信息。
    *
    * @return $this
    */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;
        return $this;
    }

    /**
    * Gets exclusiveProjectId
    *  exclusive_project_id。
    *
    * @return string|null
    */
    public function getExclusiveProjectId()
    {
        return $this->container['exclusiveProjectId'];
    }

    /**
    * Sets exclusiveProjectId
    *
    * @param string|null $exclusiveProjectId exclusive_project_id。
    *
    * @return $this
    */
    public function setExclusiveProjectId($exclusiveProjectId)
    {
        $this->container['exclusiveProjectId'] = $exclusiveProjectId;
        return $this;
    }

    /**
    * Gets epsEnable
    *  是否支持eps。
    *
    * @return bool|null
    */
    public function getEpsEnable()
    {
        return $this->container['epsEnable'];
    }

    /**
    * Sets epsEnable
    *
    * @param bool|null $epsEnable 是否支持eps。
    *
    * @return $this
    */
    public function setEpsEnable($epsEnable)
    {
        $this->container['epsEnable'] = $epsEnable;
        return $this;
    }

    /**
    * Gets sharedProjectName
    *  shared_project_name。
    *
    * @return string|null
    */
    public function getSharedProjectName()
    {
        return $this->container['sharedProjectName'];
    }

    /**
    * Sets sharedProjectName
    *
    * @param string|null $sharedProjectName shared_project_name。
    *
    * @return $this
    */
    public function setSharedProjectName($sharedProjectName)
    {
        $this->container['sharedProjectName'] = $sharedProjectName;
        return $this;
    }

    /**
    * Gets authorization
    *  authorization。
    *
    * @return string|null
    */
    public function getAuthorization()
    {
        return $this->container['authorization'];
    }

    /**
    * Sets authorization
    *
    * @param string|null $authorization authorization。
    *
    * @return $this
    */
    public function setAuthorization($authorization)
    {
        $this->container['authorization'] = $authorization;
        return $this;
    }

    /**
    * Gets contextAttributes
    *  文本属性。
    *
    * @return string|null
    */
    public function getContextAttributes()
    {
        return $this->container['contextAttributes'];
    }

    /**
    * Sets contextAttributes
    *
    * @param string|null $contextAttributes 文本属性。
    *
    * @return $this
    */
    public function setContextAttributes($contextAttributes)
    {
        $this->container['contextAttributes'] = $contextAttributes;
        return $this;
    }

    /**
    * Gets userProfile
    *  用户文件。
    *
    * @return string|null
    */
    public function getUserProfile()
    {
        return $this->container['userProfile'];
    }

    /**
    * Sets userProfile
    *
    * @param string|null $userProfile 用户文件。
    *
    * @return $this
    */
    public function setUserProfile($userProfile)
    {
        $this->container['userProfile'] = $userProfile;
        return $this;
    }

    /**
    * Gets stsToken
    *  sts_token。
    *
    * @return string|null
    */
    public function getStsToken()
    {
        return $this->container['stsToken'];
    }

    /**
    * Sets stsToken
    *
    * @param string|null $stsToken sts_token。
    *
    * @return $this
    */
    public function setStsToken($stsToken)
    {
        $this->container['stsToken'] = $stsToken;
        return $this;
    }

    /**
    * Gets accessKeyId
    *  access_key_id。
    *
    * @return string|null
    */
    public function getAccessKeyId()
    {
        return $this->container['accessKeyId'];
    }

    /**
    * Sets accessKeyId
    *
    * @param string|null $accessKeyId access_key_id。
    *
    * @return $this
    */
    public function setAccessKeyId($accessKeyId)
    {
        $this->container['accessKeyId'] = $accessKeyId;
        return $this;
    }

    /**
    * Gets secretAccessKey
    *  secret_access_key。
    *
    * @return string|null
    */
    public function getSecretAccessKey()
    {
        return $this->container['secretAccessKey'];
    }

    /**
    * Sets secretAccessKey
    *
    * @param string|null $secretAccessKey secret_access_key。
    *
    * @return $this
    */
    public function setSecretAccessKey($secretAccessKey)
    {
        $this->container['secretAccessKey'] = $secretAccessKey;
        return $this;
    }

    /**
    * Gets sourceAccount
    *  source_account。
    *
    * @return string|null
    */
    public function getSourceAccount()
    {
        return $this->container['sourceAccount'];
    }

    /**
    * Sets sourceAccount
    *
    * @param string|null $sourceAccount source_account。
    *
    * @return $this
    */
    public function setSourceAccount($sourceAccount)
    {
        $this->container['sourceAccount'] = $sourceAccount;
        return $this;
    }

    /**
    * Gets sourceUrn
    *  source_urn。
    *
    * @return string|null
    */
    public function getSourceUrn()
    {
        return $this->container['sourceUrn'];
    }

    /**
    * Sets sourceUrn
    *
    * @param string|null $sourceUrn source_urn。
    *
    * @return $this
    */
    public function setSourceUrn($sourceUrn)
    {
        $this->container['sourceUrn'] = $sourceUrn;
        return $this;
    }

    /**
    * Gets requestProof
    *  request_proof。
    *
    * @return string|null
    */
    public function getRequestProof()
    {
        return $this->container['requestProof'];
    }

    /**
    * Sets requestProof
    *
    * @param string|null $requestProof request_proof。
    *
    * @return $this
    */
    public function setRequestProof($requestProof)
    {
        $this->container['requestProof'] = $requestProof;
        return $this;
    }

    /**
    * Gets xProjectId
    *  x_project_id。
    *
    * @return string|null
    */
    public function getXProjectId()
    {
        return $this->container['xProjectId'];
    }

    /**
    * Sets xProjectId
    *
    * @param string|null $xProjectId x_project_id。
    *
    * @return $this
    */
    public function setXProjectId($xProjectId)
    {
        $this->container['xProjectId'] = $xProjectId;
        return $this;
    }

    /**
    * Gets fulfillmentAgency
    *  fulfillment_agency。
    *
    * @return string|null
    */
    public function getFulfillmentAgency()
    {
        return $this->container['fulfillmentAgency'];
    }

    /**
    * Sets fulfillmentAgency
    *
    * @param string|null $fulfillmentAgency fulfillment_agency。
    *
    * @return $this
    */
    public function setFulfillmentAgency($fulfillmentAgency)
    {
        $this->container['fulfillmentAgency'] = $fulfillmentAgency;
        return $this;
    }

    /**
    * Gets operationId
    *  operation_id。
    *
    * @return string|null
    */
    public function getOperationId()
    {
        return $this->container['operationId'];
    }

    /**
    * Sets operationId
    *
    * @param string|null $operationId operation_id。
    *
    * @return $this
    */
    public function setOperationId($operationId)
    {
        $this->container['operationId'] = $operationId;
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

