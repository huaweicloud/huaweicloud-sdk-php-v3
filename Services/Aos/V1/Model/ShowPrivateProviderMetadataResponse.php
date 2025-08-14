<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPrivateProviderMetadataResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPrivateProviderMetadataResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * providerId  私有provider（private-provider）的唯一Id。  此Id由资源编排服务在生成provider的时候生成，为UUID。  由于私有provider名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有provider，删除，再重新创建一个同名私有provider。  对于团队并行开发，用户可能希望确保，当前我操作的私有provider就是我以为的那个，而不是其他队友删除后创建的同名私有provider。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有provider所对应的Id都不相同，更新不会影响Id。如果给予的provider_id和当前provider的Id不一致，则返回400
    * providerName  私有provider（private-provider）的名称。此名字在domain_id+region下应唯一，可以使用小写英文、数字、中划线。仅支持以小写英文、数字开头结尾。  按照HCL最佳实践，该名称推荐为在模板中定义的provider的本地名称（local_name）。  创建私有Provider（CreatePrivateProvider）API 还会以 “huawei.com/private-provider”为固定前缀，并以“huawei.com/private-provider/{provider_name}”的形式返回provider_source字段。关于provider_name和provider_source字段在模板中的使用细节，详见创建私有Provider的API描述。
    * providerDescription  私有provider（private-provider）的描述。可用于客户识别被管理的私有provider。
    * providerSource  用户使用私有provider，在Terraform模板中定义required_providers信息时，需要指明的source参数。  该参数按照“huawei.com/private-provider/{provider_name}”的形式拼接。关于provider_name和provider_source字段在模板中的使用细节，详见创建私有Provider的API描述。
    * providerAgencyUrn  自定义provider所绑定的IAM委托URN，provider_agency_name和provider_agency_urn最多只能提供一个。
    * providerAgencyName  自定义provider所绑定的IAM委托名称，provider_agency_name和provider_agency_urn最多只能提供一个。
    * createTime  私有provider（private-provider）的生成时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z。
    * updateTime  私有provider（private-provider）的更新时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'providerId' => 'string',
            'providerName' => 'string',
            'providerDescription' => 'string',
            'providerSource' => 'string',
            'providerAgencyUrn' => 'string',
            'providerAgencyName' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * providerId  私有provider（private-provider）的唯一Id。  此Id由资源编排服务在生成provider的时候生成，为UUID。  由于私有provider名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有provider，删除，再重新创建一个同名私有provider。  对于团队并行开发，用户可能希望确保，当前我操作的私有provider就是我以为的那个，而不是其他队友删除后创建的同名私有provider。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有provider所对应的Id都不相同，更新不会影响Id。如果给予的provider_id和当前provider的Id不一致，则返回400
    * providerName  私有provider（private-provider）的名称。此名字在domain_id+region下应唯一，可以使用小写英文、数字、中划线。仅支持以小写英文、数字开头结尾。  按照HCL最佳实践，该名称推荐为在模板中定义的provider的本地名称（local_name）。  创建私有Provider（CreatePrivateProvider）API 还会以 “huawei.com/private-provider”为固定前缀，并以“huawei.com/private-provider/{provider_name}”的形式返回provider_source字段。关于provider_name和provider_source字段在模板中的使用细节，详见创建私有Provider的API描述。
    * providerDescription  私有provider（private-provider）的描述。可用于客户识别被管理的私有provider。
    * providerSource  用户使用私有provider，在Terraform模板中定义required_providers信息时，需要指明的source参数。  该参数按照“huawei.com/private-provider/{provider_name}”的形式拼接。关于provider_name和provider_source字段在模板中的使用细节，详见创建私有Provider的API描述。
    * providerAgencyUrn  自定义provider所绑定的IAM委托URN，provider_agency_name和provider_agency_urn最多只能提供一个。
    * providerAgencyName  自定义provider所绑定的IAM委托名称，provider_agency_name和provider_agency_urn最多只能提供一个。
    * createTime  私有provider（private-provider）的生成时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z。
    * updateTime  私有provider（private-provider）的更新时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'providerId' => null,
        'providerName' => null,
        'providerDescription' => null,
        'providerSource' => null,
        'providerAgencyUrn' => null,
        'providerAgencyName' => null,
        'createTime' => null,
        'updateTime' => null
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
    * providerId  私有provider（private-provider）的唯一Id。  此Id由资源编排服务在生成provider的时候生成，为UUID。  由于私有provider名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有provider，删除，再重新创建一个同名私有provider。  对于团队并行开发，用户可能希望确保，当前我操作的私有provider就是我以为的那个，而不是其他队友删除后创建的同名私有provider。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有provider所对应的Id都不相同，更新不会影响Id。如果给予的provider_id和当前provider的Id不一致，则返回400
    * providerName  私有provider（private-provider）的名称。此名字在domain_id+region下应唯一，可以使用小写英文、数字、中划线。仅支持以小写英文、数字开头结尾。  按照HCL最佳实践，该名称推荐为在模板中定义的provider的本地名称（local_name）。  创建私有Provider（CreatePrivateProvider）API 还会以 “huawei.com/private-provider”为固定前缀，并以“huawei.com/private-provider/{provider_name}”的形式返回provider_source字段。关于provider_name和provider_source字段在模板中的使用细节，详见创建私有Provider的API描述。
    * providerDescription  私有provider（private-provider）的描述。可用于客户识别被管理的私有provider。
    * providerSource  用户使用私有provider，在Terraform模板中定义required_providers信息时，需要指明的source参数。  该参数按照“huawei.com/private-provider/{provider_name}”的形式拼接。关于provider_name和provider_source字段在模板中的使用细节，详见创建私有Provider的API描述。
    * providerAgencyUrn  自定义provider所绑定的IAM委托URN，provider_agency_name和provider_agency_urn最多只能提供一个。
    * providerAgencyName  自定义provider所绑定的IAM委托名称，provider_agency_name和provider_agency_urn最多只能提供一个。
    * createTime  私有provider（private-provider）的生成时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z。
    * updateTime  私有provider（private-provider）的更新时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'providerId' => 'provider_id',
            'providerName' => 'provider_name',
            'providerDescription' => 'provider_description',
            'providerSource' => 'provider_source',
            'providerAgencyUrn' => 'provider_agency_urn',
            'providerAgencyName' => 'provider_agency_name',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * providerId  私有provider（private-provider）的唯一Id。  此Id由资源编排服务在生成provider的时候生成，为UUID。  由于私有provider名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有provider，删除，再重新创建一个同名私有provider。  对于团队并行开发，用户可能希望确保，当前我操作的私有provider就是我以为的那个，而不是其他队友删除后创建的同名私有provider。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有provider所对应的Id都不相同，更新不会影响Id。如果给予的provider_id和当前provider的Id不一致，则返回400
    * providerName  私有provider（private-provider）的名称。此名字在domain_id+region下应唯一，可以使用小写英文、数字、中划线。仅支持以小写英文、数字开头结尾。  按照HCL最佳实践，该名称推荐为在模板中定义的provider的本地名称（local_name）。  创建私有Provider（CreatePrivateProvider）API 还会以 “huawei.com/private-provider”为固定前缀，并以“huawei.com/private-provider/{provider_name}”的形式返回provider_source字段。关于provider_name和provider_source字段在模板中的使用细节，详见创建私有Provider的API描述。
    * providerDescription  私有provider（private-provider）的描述。可用于客户识别被管理的私有provider。
    * providerSource  用户使用私有provider，在Terraform模板中定义required_providers信息时，需要指明的source参数。  该参数按照“huawei.com/private-provider/{provider_name}”的形式拼接。关于provider_name和provider_source字段在模板中的使用细节，详见创建私有Provider的API描述。
    * providerAgencyUrn  自定义provider所绑定的IAM委托URN，provider_agency_name和provider_agency_urn最多只能提供一个。
    * providerAgencyName  自定义provider所绑定的IAM委托名称，provider_agency_name和provider_agency_urn最多只能提供一个。
    * createTime  私有provider（private-provider）的生成时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z。
    * updateTime  私有provider（private-provider）的更新时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z。
    *
    * @var string[]
    */
    protected static $setters = [
            'providerId' => 'setProviderId',
            'providerName' => 'setProviderName',
            'providerDescription' => 'setProviderDescription',
            'providerSource' => 'setProviderSource',
            'providerAgencyUrn' => 'setProviderAgencyUrn',
            'providerAgencyName' => 'setProviderAgencyName',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * providerId  私有provider（private-provider）的唯一Id。  此Id由资源编排服务在生成provider的时候生成，为UUID。  由于私有provider名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有provider，删除，再重新创建一个同名私有provider。  对于团队并行开发，用户可能希望确保，当前我操作的私有provider就是我以为的那个，而不是其他队友删除后创建的同名私有provider。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有provider所对应的Id都不相同，更新不会影响Id。如果给予的provider_id和当前provider的Id不一致，则返回400
    * providerName  私有provider（private-provider）的名称。此名字在domain_id+region下应唯一，可以使用小写英文、数字、中划线。仅支持以小写英文、数字开头结尾。  按照HCL最佳实践，该名称推荐为在模板中定义的provider的本地名称（local_name）。  创建私有Provider（CreatePrivateProvider）API 还会以 “huawei.com/private-provider”为固定前缀，并以“huawei.com/private-provider/{provider_name}”的形式返回provider_source字段。关于provider_name和provider_source字段在模板中的使用细节，详见创建私有Provider的API描述。
    * providerDescription  私有provider（private-provider）的描述。可用于客户识别被管理的私有provider。
    * providerSource  用户使用私有provider，在Terraform模板中定义required_providers信息时，需要指明的source参数。  该参数按照“huawei.com/private-provider/{provider_name}”的形式拼接。关于provider_name和provider_source字段在模板中的使用细节，详见创建私有Provider的API描述。
    * providerAgencyUrn  自定义provider所绑定的IAM委托URN，provider_agency_name和provider_agency_urn最多只能提供一个。
    * providerAgencyName  自定义provider所绑定的IAM委托名称，provider_agency_name和provider_agency_urn最多只能提供一个。
    * createTime  私有provider（private-provider）的生成时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z。
    * updateTime  私有provider（private-provider）的更新时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z。
    *
    * @var string[]
    */
    protected static $getters = [
            'providerId' => 'getProviderId',
            'providerName' => 'getProviderName',
            'providerDescription' => 'getProviderDescription',
            'providerSource' => 'getProviderSource',
            'providerAgencyUrn' => 'getProviderAgencyUrn',
            'providerAgencyName' => 'getProviderAgencyName',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['providerId'] = isset($data['providerId']) ? $data['providerId'] : null;
        $this->container['providerName'] = isset($data['providerName']) ? $data['providerName'] : null;
        $this->container['providerDescription'] = isset($data['providerDescription']) ? $data['providerDescription'] : null;
        $this->container['providerSource'] = isset($data['providerSource']) ? $data['providerSource'] : null;
        $this->container['providerAgencyUrn'] = isset($data['providerAgencyUrn']) ? $data['providerAgencyUrn'] : null;
        $this->container['providerAgencyName'] = isset($data['providerAgencyName']) ? $data['providerAgencyName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['providerId']) && (mb_strlen($this->container['providerId']) > 36)) {
                $invalidProperties[] = "invalid value for 'providerId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['providerId']) && (mb_strlen($this->container['providerId']) < 36)) {
                $invalidProperties[] = "invalid value for 'providerId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['providerId']) && !preg_match("/^[a-z0-9]+[a-z0-9-]*$/", $this->container['providerId'])) {
                $invalidProperties[] = "invalid value for 'providerId', must be conform to the pattern /^[a-z0-9]+[a-z0-9-]*$/.";
            }
        if ($this->container['providerName'] === null) {
            $invalidProperties[] = "'providerName' can't be null";
        }
            if ((mb_strlen($this->container['providerName']) > 64)) {
                $invalidProperties[] = "invalid value for 'providerName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['providerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'providerName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[0-9a-z]([0-9a-z-]*[0-9a-z])*$/", $this->container['providerName'])) {
                $invalidProperties[] = "invalid value for 'providerName', must be conform to the pattern /^[0-9a-z]([0-9a-z-]*[0-9a-z])*$/.";
            }
            if (!is_null($this->container['providerDescription']) && (mb_strlen($this->container['providerDescription']) > 1024)) {
                $invalidProperties[] = "invalid value for 'providerDescription', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['providerDescription']) && (mb_strlen($this->container['providerDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'providerDescription', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['providerAgencyUrn']) && !preg_match("/^(iam:\\*?:[A-Za-z0-9-]{1,64}:agency:.{1,64})?$/", $this->container['providerAgencyUrn'])) {
                $invalidProperties[] = "invalid value for 'providerAgencyUrn', must be conform to the pattern /^(iam:\\*?:[A-Za-z0-9-]{1,64}:agency:.{1,64})?$/.";
            }
            if (!is_null($this->container['providerAgencyName']) && (mb_strlen($this->container['providerAgencyName']) > 64)) {
                $invalidProperties[] = "invalid value for 'providerAgencyName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['providerAgencyName']) && (mb_strlen($this->container['providerAgencyName']) < 0)) {
                $invalidProperties[] = "invalid value for 'providerAgencyName', the character length must be bigger than or equal to 0.";
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
    * Gets providerId
    *  私有provider（private-provider）的唯一Id。  此Id由资源编排服务在生成provider的时候生成，为UUID。  由于私有provider名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有provider，删除，再重新创建一个同名私有provider。  对于团队并行开发，用户可能希望确保，当前我操作的私有provider就是我以为的那个，而不是其他队友删除后创建的同名私有provider。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有provider所对应的Id都不相同，更新不会影响Id。如果给予的provider_id和当前provider的Id不一致，则返回400
    *
    * @return string|null
    */
    public function getProviderId()
    {
        return $this->container['providerId'];
    }

    /**
    * Sets providerId
    *
    * @param string|null $providerId 私有provider（private-provider）的唯一Id。  此Id由资源编排服务在生成provider的时候生成，为UUID。  由于私有provider名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的私有provider，删除，再重新创建一个同名私有provider。  对于团队并行开发，用户可能希望确保，当前我操作的私有provider就是我以为的那个，而不是其他队友删除后创建的同名私有provider。因此，使用Id就可以做到强匹配。  资源编排服务保证每次创建的私有provider所对应的Id都不相同，更新不会影响Id。如果给予的provider_id和当前provider的Id不一致，则返回400
    *
    * @return $this
    */
    public function setProviderId($providerId)
    {
        $this->container['providerId'] = $providerId;
        return $this;
    }

    /**
    * Gets providerName
    *  私有provider（private-provider）的名称。此名字在domain_id+region下应唯一，可以使用小写英文、数字、中划线。仅支持以小写英文、数字开头结尾。  按照HCL最佳实践，该名称推荐为在模板中定义的provider的本地名称（local_name）。  创建私有Provider（CreatePrivateProvider）API 还会以 “huawei.com/private-provider”为固定前缀，并以“huawei.com/private-provider/{provider_name}”的形式返回provider_source字段。关于provider_name和provider_source字段在模板中的使用细节，详见创建私有Provider的API描述。
    *
    * @return string
    */
    public function getProviderName()
    {
        return $this->container['providerName'];
    }

    /**
    * Sets providerName
    *
    * @param string $providerName 私有provider（private-provider）的名称。此名字在domain_id+region下应唯一，可以使用小写英文、数字、中划线。仅支持以小写英文、数字开头结尾。  按照HCL最佳实践，该名称推荐为在模板中定义的provider的本地名称（local_name）。  创建私有Provider（CreatePrivateProvider）API 还会以 “huawei.com/private-provider”为固定前缀，并以“huawei.com/private-provider/{provider_name}”的形式返回provider_source字段。关于provider_name和provider_source字段在模板中的使用细节，详见创建私有Provider的API描述。
    *
    * @return $this
    */
    public function setProviderName($providerName)
    {
        $this->container['providerName'] = $providerName;
        return $this;
    }

    /**
    * Gets providerDescription
    *  私有provider（private-provider）的描述。可用于客户识别被管理的私有provider。
    *
    * @return string|null
    */
    public function getProviderDescription()
    {
        return $this->container['providerDescription'];
    }

    /**
    * Sets providerDescription
    *
    * @param string|null $providerDescription 私有provider（private-provider）的描述。可用于客户识别被管理的私有provider。
    *
    * @return $this
    */
    public function setProviderDescription($providerDescription)
    {
        $this->container['providerDescription'] = $providerDescription;
        return $this;
    }

    /**
    * Gets providerSource
    *  用户使用私有provider，在Terraform模板中定义required_providers信息时，需要指明的source参数。  该参数按照“huawei.com/private-provider/{provider_name}”的形式拼接。关于provider_name和provider_source字段在模板中的使用细节，详见创建私有Provider的API描述。
    *
    * @return string|null
    */
    public function getProviderSource()
    {
        return $this->container['providerSource'];
    }

    /**
    * Sets providerSource
    *
    * @param string|null $providerSource 用户使用私有provider，在Terraform模板中定义required_providers信息时，需要指明的source参数。  该参数按照“huawei.com/private-provider/{provider_name}”的形式拼接。关于provider_name和provider_source字段在模板中的使用细节，详见创建私有Provider的API描述。
    *
    * @return $this
    */
    public function setProviderSource($providerSource)
    {
        $this->container['providerSource'] = $providerSource;
        return $this;
    }

    /**
    * Gets providerAgencyUrn
    *  自定义provider所绑定的IAM委托URN，provider_agency_name和provider_agency_urn最多只能提供一个。
    *
    * @return string|null
    */
    public function getProviderAgencyUrn()
    {
        return $this->container['providerAgencyUrn'];
    }

    /**
    * Sets providerAgencyUrn
    *
    * @param string|null $providerAgencyUrn 自定义provider所绑定的IAM委托URN，provider_agency_name和provider_agency_urn最多只能提供一个。
    *
    * @return $this
    */
    public function setProviderAgencyUrn($providerAgencyUrn)
    {
        $this->container['providerAgencyUrn'] = $providerAgencyUrn;
        return $this;
    }

    /**
    * Gets providerAgencyName
    *  自定义provider所绑定的IAM委托名称，provider_agency_name和provider_agency_urn最多只能提供一个。
    *
    * @return string|null
    */
    public function getProviderAgencyName()
    {
        return $this->container['providerAgencyName'];
    }

    /**
    * Sets providerAgencyName
    *
    * @param string|null $providerAgencyName 自定义provider所绑定的IAM委托名称，provider_agency_name和provider_agency_urn最多只能提供一个。
    *
    * @return $this
    */
    public function setProviderAgencyName($providerAgencyName)
    {
        $this->container['providerAgencyName'] = $providerAgencyName;
        return $this;
    }

    /**
    * Gets createTime
    *  私有provider（private-provider）的生成时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 私有provider（private-provider）的生成时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  私有provider（private-provider）的更新时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 私有provider（private-provider）的更新时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

