<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CacheRules implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CacheRules';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * matchType  匹配类型: - all：匹配所有文件， - file_extension：按文件后缀匹配， - catalog：按目录匹配， - full_path：全路径匹配， - home_page：按首页匹配。   > 配置单条缓存规则时，可不传，默认为all。   > 配置多条缓存规则时，此参数必传。
    * matchValue  缓存匹配设置， 当match_type为all时，为空。当match_type为file_extension时，为文件后缀，输入首字符为“.”，以“,”进行分隔， 如.jpg,.zip,.exe，并且输入的文 件名后缀总数不超过20个。 当match_type为catalog时，为目录，输入要求以“/”作为首字符， 以“,”进行分隔，如/test/folder01,/test/folder02，并且输入的目录路径总数不超过20个。  当match_type为full_path时，为全路径，输入要求以“/”作为首字符，支持匹配指定目录下的具体文件，或者带通配符“\\*”的文件， 如/test/index.html,/test/\\*.jpg。 当match_type为home_page时，为空。
    * ttl  缓存过期时间，最大支持365天。  > 默认值为0。
    * ttlUnit  缓存过期时间单位，s：秒；m：分；h：小时；d：天。
    * priority  此条缓存规则的优先级, 默认值1，数值越大，优先级越高，取值范围为1-100，优先级不能相同。
    * followOrigin  缓存遵循源站开关，on：打开，off：关闭。  > 默认值为off。
    * forceCache  强制缓存：CDN节点缓存过期时间是否忽略源站响应头Cache-Control中的no-cache、private、no-store字段，默认关闭强制缓存功能。强制缓存与缓存过期时间来源功能配合使用，具体使用限制及配置效果请参考CDN用户指南的配置节点缓存规则章节。on：打开强制缓存，off：关闭强制缓存
    * urlParameterType  URL参数： - del_params：忽略指定URL参数， - reserve_params：保留指定URL参数， - ignore_url_params：忽略全部URL参数， - full_url：使用完整URL参数。   > 不传此参数时，默认为full_url。
    * urlParameterValue  URL参数值，最多设置10条，以\",\"分隔。  > 当url_parameter_type为del_params或reserve_params时必填。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'matchType' => 'string',
            'matchValue' => 'string',
            'ttl' => 'int',
            'ttlUnit' => 'string',
            'priority' => 'int',
            'followOrigin' => 'string',
            'forceCache' => 'string',
            'urlParameterType' => 'string',
            'urlParameterValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * matchType  匹配类型: - all：匹配所有文件， - file_extension：按文件后缀匹配， - catalog：按目录匹配， - full_path：全路径匹配， - home_page：按首页匹配。   > 配置单条缓存规则时，可不传，默认为all。   > 配置多条缓存规则时，此参数必传。
    * matchValue  缓存匹配设置， 当match_type为all时，为空。当match_type为file_extension时，为文件后缀，输入首字符为“.”，以“,”进行分隔， 如.jpg,.zip,.exe，并且输入的文 件名后缀总数不超过20个。 当match_type为catalog时，为目录，输入要求以“/”作为首字符， 以“,”进行分隔，如/test/folder01,/test/folder02，并且输入的目录路径总数不超过20个。  当match_type为full_path时，为全路径，输入要求以“/”作为首字符，支持匹配指定目录下的具体文件，或者带通配符“\\*”的文件， 如/test/index.html,/test/\\*.jpg。 当match_type为home_page时，为空。
    * ttl  缓存过期时间，最大支持365天。  > 默认值为0。
    * ttlUnit  缓存过期时间单位，s：秒；m：分；h：小时；d：天。
    * priority  此条缓存规则的优先级, 默认值1，数值越大，优先级越高，取值范围为1-100，优先级不能相同。
    * followOrigin  缓存遵循源站开关，on：打开，off：关闭。  > 默认值为off。
    * forceCache  强制缓存：CDN节点缓存过期时间是否忽略源站响应头Cache-Control中的no-cache、private、no-store字段，默认关闭强制缓存功能。强制缓存与缓存过期时间来源功能配合使用，具体使用限制及配置效果请参考CDN用户指南的配置节点缓存规则章节。on：打开强制缓存，off：关闭强制缓存
    * urlParameterType  URL参数： - del_params：忽略指定URL参数， - reserve_params：保留指定URL参数， - ignore_url_params：忽略全部URL参数， - full_url：使用完整URL参数。   > 不传此参数时，默认为full_url。
    * urlParameterValue  URL参数值，最多设置10条，以\",\"分隔。  > 当url_parameter_type为del_params或reserve_params时必填。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'matchType' => null,
        'matchValue' => null,
        'ttl' => null,
        'ttlUnit' => null,
        'priority' => null,
        'followOrigin' => null,
        'forceCache' => null,
        'urlParameterType' => null,
        'urlParameterValue' => null
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
    * matchType  匹配类型: - all：匹配所有文件， - file_extension：按文件后缀匹配， - catalog：按目录匹配， - full_path：全路径匹配， - home_page：按首页匹配。   > 配置单条缓存规则时，可不传，默认为all。   > 配置多条缓存规则时，此参数必传。
    * matchValue  缓存匹配设置， 当match_type为all时，为空。当match_type为file_extension时，为文件后缀，输入首字符为“.”，以“,”进行分隔， 如.jpg,.zip,.exe，并且输入的文 件名后缀总数不超过20个。 当match_type为catalog时，为目录，输入要求以“/”作为首字符， 以“,”进行分隔，如/test/folder01,/test/folder02，并且输入的目录路径总数不超过20个。  当match_type为full_path时，为全路径，输入要求以“/”作为首字符，支持匹配指定目录下的具体文件，或者带通配符“\\*”的文件， 如/test/index.html,/test/\\*.jpg。 当match_type为home_page时，为空。
    * ttl  缓存过期时间，最大支持365天。  > 默认值为0。
    * ttlUnit  缓存过期时间单位，s：秒；m：分；h：小时；d：天。
    * priority  此条缓存规则的优先级, 默认值1，数值越大，优先级越高，取值范围为1-100，优先级不能相同。
    * followOrigin  缓存遵循源站开关，on：打开，off：关闭。  > 默认值为off。
    * forceCache  强制缓存：CDN节点缓存过期时间是否忽略源站响应头Cache-Control中的no-cache、private、no-store字段，默认关闭强制缓存功能。强制缓存与缓存过期时间来源功能配合使用，具体使用限制及配置效果请参考CDN用户指南的配置节点缓存规则章节。on：打开强制缓存，off：关闭强制缓存
    * urlParameterType  URL参数： - del_params：忽略指定URL参数， - reserve_params：保留指定URL参数， - ignore_url_params：忽略全部URL参数， - full_url：使用完整URL参数。   > 不传此参数时，默认为full_url。
    * urlParameterValue  URL参数值，最多设置10条，以\",\"分隔。  > 当url_parameter_type为del_params或reserve_params时必填。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'matchType' => 'match_type',
            'matchValue' => 'match_value',
            'ttl' => 'ttl',
            'ttlUnit' => 'ttl_unit',
            'priority' => 'priority',
            'followOrigin' => 'follow_origin',
            'forceCache' => 'force_cache',
            'urlParameterType' => 'url_parameter_type',
            'urlParameterValue' => 'url_parameter_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * matchType  匹配类型: - all：匹配所有文件， - file_extension：按文件后缀匹配， - catalog：按目录匹配， - full_path：全路径匹配， - home_page：按首页匹配。   > 配置单条缓存规则时，可不传，默认为all。   > 配置多条缓存规则时，此参数必传。
    * matchValue  缓存匹配设置， 当match_type为all时，为空。当match_type为file_extension时，为文件后缀，输入首字符为“.”，以“,”进行分隔， 如.jpg,.zip,.exe，并且输入的文 件名后缀总数不超过20个。 当match_type为catalog时，为目录，输入要求以“/”作为首字符， 以“,”进行分隔，如/test/folder01,/test/folder02，并且输入的目录路径总数不超过20个。  当match_type为full_path时，为全路径，输入要求以“/”作为首字符，支持匹配指定目录下的具体文件，或者带通配符“\\*”的文件， 如/test/index.html,/test/\\*.jpg。 当match_type为home_page时，为空。
    * ttl  缓存过期时间，最大支持365天。  > 默认值为0。
    * ttlUnit  缓存过期时间单位，s：秒；m：分；h：小时；d：天。
    * priority  此条缓存规则的优先级, 默认值1，数值越大，优先级越高，取值范围为1-100，优先级不能相同。
    * followOrigin  缓存遵循源站开关，on：打开，off：关闭。  > 默认值为off。
    * forceCache  强制缓存：CDN节点缓存过期时间是否忽略源站响应头Cache-Control中的no-cache、private、no-store字段，默认关闭强制缓存功能。强制缓存与缓存过期时间来源功能配合使用，具体使用限制及配置效果请参考CDN用户指南的配置节点缓存规则章节。on：打开强制缓存，off：关闭强制缓存
    * urlParameterType  URL参数： - del_params：忽略指定URL参数， - reserve_params：保留指定URL参数， - ignore_url_params：忽略全部URL参数， - full_url：使用完整URL参数。   > 不传此参数时，默认为full_url。
    * urlParameterValue  URL参数值，最多设置10条，以\",\"分隔。  > 当url_parameter_type为del_params或reserve_params时必填。
    *
    * @var string[]
    */
    protected static $setters = [
            'matchType' => 'setMatchType',
            'matchValue' => 'setMatchValue',
            'ttl' => 'setTtl',
            'ttlUnit' => 'setTtlUnit',
            'priority' => 'setPriority',
            'followOrigin' => 'setFollowOrigin',
            'forceCache' => 'setForceCache',
            'urlParameterType' => 'setUrlParameterType',
            'urlParameterValue' => 'setUrlParameterValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * matchType  匹配类型: - all：匹配所有文件， - file_extension：按文件后缀匹配， - catalog：按目录匹配， - full_path：全路径匹配， - home_page：按首页匹配。   > 配置单条缓存规则时，可不传，默认为all。   > 配置多条缓存规则时，此参数必传。
    * matchValue  缓存匹配设置， 当match_type为all时，为空。当match_type为file_extension时，为文件后缀，输入首字符为“.”，以“,”进行分隔， 如.jpg,.zip,.exe，并且输入的文 件名后缀总数不超过20个。 当match_type为catalog时，为目录，输入要求以“/”作为首字符， 以“,”进行分隔，如/test/folder01,/test/folder02，并且输入的目录路径总数不超过20个。  当match_type为full_path时，为全路径，输入要求以“/”作为首字符，支持匹配指定目录下的具体文件，或者带通配符“\\*”的文件， 如/test/index.html,/test/\\*.jpg。 当match_type为home_page时，为空。
    * ttl  缓存过期时间，最大支持365天。  > 默认值为0。
    * ttlUnit  缓存过期时间单位，s：秒；m：分；h：小时；d：天。
    * priority  此条缓存规则的优先级, 默认值1，数值越大，优先级越高，取值范围为1-100，优先级不能相同。
    * followOrigin  缓存遵循源站开关，on：打开，off：关闭。  > 默认值为off。
    * forceCache  强制缓存：CDN节点缓存过期时间是否忽略源站响应头Cache-Control中的no-cache、private、no-store字段，默认关闭强制缓存功能。强制缓存与缓存过期时间来源功能配合使用，具体使用限制及配置效果请参考CDN用户指南的配置节点缓存规则章节。on：打开强制缓存，off：关闭强制缓存
    * urlParameterType  URL参数： - del_params：忽略指定URL参数， - reserve_params：保留指定URL参数， - ignore_url_params：忽略全部URL参数， - full_url：使用完整URL参数。   > 不传此参数时，默认为full_url。
    * urlParameterValue  URL参数值，最多设置10条，以\",\"分隔。  > 当url_parameter_type为del_params或reserve_params时必填。
    *
    * @var string[]
    */
    protected static $getters = [
            'matchType' => 'getMatchType',
            'matchValue' => 'getMatchValue',
            'ttl' => 'getTtl',
            'ttlUnit' => 'getTtlUnit',
            'priority' => 'getPriority',
            'followOrigin' => 'getFollowOrigin',
            'forceCache' => 'getForceCache',
            'urlParameterType' => 'getUrlParameterType',
            'urlParameterValue' => 'getUrlParameterValue'
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
        $this->container['matchType'] = isset($data['matchType']) ? $data['matchType'] : null;
        $this->container['matchValue'] = isset($data['matchValue']) ? $data['matchValue'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
        $this->container['ttlUnit'] = isset($data['ttlUnit']) ? $data['ttlUnit'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['followOrigin'] = isset($data['followOrigin']) ? $data['followOrigin'] : null;
        $this->container['forceCache'] = isset($data['forceCache']) ? $data['forceCache'] : null;
        $this->container['urlParameterType'] = isset($data['urlParameterType']) ? $data['urlParameterType'] : null;
        $this->container['urlParameterValue'] = isset($data['urlParameterValue']) ? $data['urlParameterValue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ttlUnit'] === null) {
            $invalidProperties[] = "'ttlUnit' can't be null";
        }
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
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
    * Gets matchType
    *  匹配类型: - all：匹配所有文件， - file_extension：按文件后缀匹配， - catalog：按目录匹配， - full_path：全路径匹配， - home_page：按首页匹配。   > 配置单条缓存规则时，可不传，默认为all。   > 配置多条缓存规则时，此参数必传。
    *
    * @return string|null
    */
    public function getMatchType()
    {
        return $this->container['matchType'];
    }

    /**
    * Sets matchType
    *
    * @param string|null $matchType 匹配类型: - all：匹配所有文件， - file_extension：按文件后缀匹配， - catalog：按目录匹配， - full_path：全路径匹配， - home_page：按首页匹配。   > 配置单条缓存规则时，可不传，默认为all。   > 配置多条缓存规则时，此参数必传。
    *
    * @return $this
    */
    public function setMatchType($matchType)
    {
        $this->container['matchType'] = $matchType;
        return $this;
    }

    /**
    * Gets matchValue
    *  缓存匹配设置， 当match_type为all时，为空。当match_type为file_extension时，为文件后缀，输入首字符为“.”，以“,”进行分隔， 如.jpg,.zip,.exe，并且输入的文 件名后缀总数不超过20个。 当match_type为catalog时，为目录，输入要求以“/”作为首字符， 以“,”进行分隔，如/test/folder01,/test/folder02，并且输入的目录路径总数不超过20个。  当match_type为full_path时，为全路径，输入要求以“/”作为首字符，支持匹配指定目录下的具体文件，或者带通配符“\\*”的文件， 如/test/index.html,/test/\\*.jpg。 当match_type为home_page时，为空。
    *
    * @return string|null
    */
    public function getMatchValue()
    {
        return $this->container['matchValue'];
    }

    /**
    * Sets matchValue
    *
    * @param string|null $matchValue 缓存匹配设置， 当match_type为all时，为空。当match_type为file_extension时，为文件后缀，输入首字符为“.”，以“,”进行分隔， 如.jpg,.zip,.exe，并且输入的文 件名后缀总数不超过20个。 当match_type为catalog时，为目录，输入要求以“/”作为首字符， 以“,”进行分隔，如/test/folder01,/test/folder02，并且输入的目录路径总数不超过20个。  当match_type为full_path时，为全路径，输入要求以“/”作为首字符，支持匹配指定目录下的具体文件，或者带通配符“\\*”的文件， 如/test/index.html,/test/\\*.jpg。 当match_type为home_page时，为空。
    *
    * @return $this
    */
    public function setMatchValue($matchValue)
    {
        $this->container['matchValue'] = $matchValue;
        return $this;
    }

    /**
    * Gets ttl
    *  缓存过期时间，最大支持365天。  > 默认值为0。
    *
    * @return int|null
    */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
    * Sets ttl
    *
    * @param int|null $ttl 缓存过期时间，最大支持365天。  > 默认值为0。
    *
    * @return $this
    */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;
        return $this;
    }

    /**
    * Gets ttlUnit
    *  缓存过期时间单位，s：秒；m：分；h：小时；d：天。
    *
    * @return string
    */
    public function getTtlUnit()
    {
        return $this->container['ttlUnit'];
    }

    /**
    * Sets ttlUnit
    *
    * @param string $ttlUnit 缓存过期时间单位，s：秒；m：分；h：小时；d：天。
    *
    * @return $this
    */
    public function setTtlUnit($ttlUnit)
    {
        $this->container['ttlUnit'] = $ttlUnit;
        return $this;
    }

    /**
    * Gets priority
    *  此条缓存规则的优先级, 默认值1，数值越大，优先级越高，取值范围为1-100，优先级不能相同。
    *
    * @return int
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int $priority 此条缓存规则的优先级, 默认值1，数值越大，优先级越高，取值范围为1-100，优先级不能相同。
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets followOrigin
    *  缓存遵循源站开关，on：打开，off：关闭。  > 默认值为off。
    *
    * @return string|null
    */
    public function getFollowOrigin()
    {
        return $this->container['followOrigin'];
    }

    /**
    * Sets followOrigin
    *
    * @param string|null $followOrigin 缓存遵循源站开关，on：打开，off：关闭。  > 默认值为off。
    *
    * @return $this
    */
    public function setFollowOrigin($followOrigin)
    {
        $this->container['followOrigin'] = $followOrigin;
        return $this;
    }

    /**
    * Gets forceCache
    *  强制缓存：CDN节点缓存过期时间是否忽略源站响应头Cache-Control中的no-cache、private、no-store字段，默认关闭强制缓存功能。强制缓存与缓存过期时间来源功能配合使用，具体使用限制及配置效果请参考CDN用户指南的配置节点缓存规则章节。on：打开强制缓存，off：关闭强制缓存
    *
    * @return string|null
    */
    public function getForceCache()
    {
        return $this->container['forceCache'];
    }

    /**
    * Sets forceCache
    *
    * @param string|null $forceCache 强制缓存：CDN节点缓存过期时间是否忽略源站响应头Cache-Control中的no-cache、private、no-store字段，默认关闭强制缓存功能。强制缓存与缓存过期时间来源功能配合使用，具体使用限制及配置效果请参考CDN用户指南的配置节点缓存规则章节。on：打开强制缓存，off：关闭强制缓存
    *
    * @return $this
    */
    public function setForceCache($forceCache)
    {
        $this->container['forceCache'] = $forceCache;
        return $this;
    }

    /**
    * Gets urlParameterType
    *  URL参数： - del_params：忽略指定URL参数， - reserve_params：保留指定URL参数， - ignore_url_params：忽略全部URL参数， - full_url：使用完整URL参数。   > 不传此参数时，默认为full_url。
    *
    * @return string|null
    */
    public function getUrlParameterType()
    {
        return $this->container['urlParameterType'];
    }

    /**
    * Sets urlParameterType
    *
    * @param string|null $urlParameterType URL参数： - del_params：忽略指定URL参数， - reserve_params：保留指定URL参数， - ignore_url_params：忽略全部URL参数， - full_url：使用完整URL参数。   > 不传此参数时，默认为full_url。
    *
    * @return $this
    */
    public function setUrlParameterType($urlParameterType)
    {
        $this->container['urlParameterType'] = $urlParameterType;
        return $this;
    }

    /**
    * Gets urlParameterValue
    *  URL参数值，最多设置10条，以\",\"分隔。  > 当url_parameter_type为del_params或reserve_params时必填。
    *
    * @return string|null
    */
    public function getUrlParameterValue()
    {
        return $this->container['urlParameterValue'];
    }

    /**
    * Sets urlParameterValue
    *
    * @param string|null $urlParameterValue URL参数值，最多设置10条，以\",\"分隔。  > 当url_parameter_type为del_params或reserve_params时必填。
    *
    * @return $this
    */
    public function setUrlParameterValue($urlParameterValue)
    {
        $this->container['urlParameterValue'] = $urlParameterValue;
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

