<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MssPackageItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MssPackageItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * url  客户自定义的拉流地址，包括方法、域名、路径
    * streamSelection  从全量流中过滤出一个码率在[min, max]区间的流。如果不需要码率过滤可不选。
    * segmentDurationSeconds  频道输出分片的时长，为必选项  单位：秒。取值范围：1-10 > 修改分片时长会影响已录制内容的时移和回看服务，请谨慎修改！
    * playlistWindowSeconds  频道直播返回分片的窗口长度，为频道输出分片的时长乘以数量后得到的值。实际返回的分片数不小于3个。  单位：秒。取值范围：0 - 86400（24小时转化成秒后的取值）
    * encryption  encryption
    * extArgs  其他额外参数
    * delaySegment  延播时长，单位秒
    * requestArgs  requestArgs
    * enableAccess  当频道mode是ONLY_OS类型时，允许本输出可以直接从源站拉流，默认：false true：允许output访问 false：禁止output访问
    * allowAllIpAccess  是否放通所有的IP访问，默认：false true：允许所有的IP地址访问，ip_whitelist配置不生效 false：不允许所有的IP地址访问，ip_whitelist生效，仅在ip_whitelist配置的ip地址才能访问
    * ipWhitelist  当频道类型mode是ONLY_OS类型时，允许直接从源站拉流的IP白名单
    * cdnIdentifierHeader  cdnIdentifierHeader
    * originDomainMaster  源站分发域名-主region 跟CreateOttChannelInfoReq.region一致 满足正则：^(\\[a-zA-Z0-9]([a-zA-Z0-9\\-]{0,61}[a-zA-Z0-9])?\\.){2,}[a-zA-Z]{2,16}$ 最大长度255
    * originDomainSlave  源站分发域名-备region 满足正则：^(\\[a-zA-Z0-9]([a-zA-Z0-9\\-]{0,61}[a-zA-Z0-9])?\\.){2,}[a-zA-Z]{2,16}$ 最大长度255
    * manifestName  output的索引文件名字 默认：index 长度：0-128 字符集：大小写字母、数字、\"-\"、\".\"、\"_\"，不能有/路径
    * slaveUrl  客户自定义的拉流地址，包括方法、域名、路径
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'url' => 'string',
            'streamSelection' => '\HuaweiCloud\SDK\Live\V1\Model\StreamSelectionItem[]',
            'segmentDurationSeconds' => 'int',
            'playlistWindowSeconds' => 'int',
            'encryption' => '\HuaweiCloud\SDK\Live\V1\Model\Encryption',
            'extArgs' => 'object',
            'delaySegment' => 'int',
            'requestArgs' => '\HuaweiCloud\SDK\Live\V1\Model\PackageRequestArgs',
            'enableAccess' => 'bool',
            'allowAllIpAccess' => 'bool',
            'ipWhitelist' => 'string',
            'cdnIdentifierHeader' => '\HuaweiCloud\SDK\Live\V1\Model\HttpHeader',
            'originDomainMaster' => 'string',
            'originDomainSlave' => 'string',
            'manifestName' => 'string',
            'slaveUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * url  客户自定义的拉流地址，包括方法、域名、路径
    * streamSelection  从全量流中过滤出一个码率在[min, max]区间的流。如果不需要码率过滤可不选。
    * segmentDurationSeconds  频道输出分片的时长，为必选项  单位：秒。取值范围：1-10 > 修改分片时长会影响已录制内容的时移和回看服务，请谨慎修改！
    * playlistWindowSeconds  频道直播返回分片的窗口长度，为频道输出分片的时长乘以数量后得到的值。实际返回的分片数不小于3个。  单位：秒。取值范围：0 - 86400（24小时转化成秒后的取值）
    * encryption  encryption
    * extArgs  其他额外参数
    * delaySegment  延播时长，单位秒
    * requestArgs  requestArgs
    * enableAccess  当频道mode是ONLY_OS类型时，允许本输出可以直接从源站拉流，默认：false true：允许output访问 false：禁止output访问
    * allowAllIpAccess  是否放通所有的IP访问，默认：false true：允许所有的IP地址访问，ip_whitelist配置不生效 false：不允许所有的IP地址访问，ip_whitelist生效，仅在ip_whitelist配置的ip地址才能访问
    * ipWhitelist  当频道类型mode是ONLY_OS类型时，允许直接从源站拉流的IP白名单
    * cdnIdentifierHeader  cdnIdentifierHeader
    * originDomainMaster  源站分发域名-主region 跟CreateOttChannelInfoReq.region一致 满足正则：^(\\[a-zA-Z0-9]([a-zA-Z0-9\\-]{0,61}[a-zA-Z0-9])?\\.){2,}[a-zA-Z]{2,16}$ 最大长度255
    * originDomainSlave  源站分发域名-备region 满足正则：^(\\[a-zA-Z0-9]([a-zA-Z0-9\\-]{0,61}[a-zA-Z0-9])?\\.){2,}[a-zA-Z]{2,16}$ 最大长度255
    * manifestName  output的索引文件名字 默认：index 长度：0-128 字符集：大小写字母、数字、\"-\"、\".\"、\"_\"，不能有/路径
    * slaveUrl  客户自定义的拉流地址，包括方法、域名、路径
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'url' => null,
        'streamSelection' => null,
        'segmentDurationSeconds' => null,
        'playlistWindowSeconds' => null,
        'encryption' => null,
        'extArgs' => null,
        'delaySegment' => 'int32',
        'requestArgs' => null,
        'enableAccess' => null,
        'allowAllIpAccess' => null,
        'ipWhitelist' => null,
        'cdnIdentifierHeader' => null,
        'originDomainMaster' => null,
        'originDomainSlave' => null,
        'manifestName' => null,
        'slaveUrl' => null
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
    * url  客户自定义的拉流地址，包括方法、域名、路径
    * streamSelection  从全量流中过滤出一个码率在[min, max]区间的流。如果不需要码率过滤可不选。
    * segmentDurationSeconds  频道输出分片的时长，为必选项  单位：秒。取值范围：1-10 > 修改分片时长会影响已录制内容的时移和回看服务，请谨慎修改！
    * playlistWindowSeconds  频道直播返回分片的窗口长度，为频道输出分片的时长乘以数量后得到的值。实际返回的分片数不小于3个。  单位：秒。取值范围：0 - 86400（24小时转化成秒后的取值）
    * encryption  encryption
    * extArgs  其他额外参数
    * delaySegment  延播时长，单位秒
    * requestArgs  requestArgs
    * enableAccess  当频道mode是ONLY_OS类型时，允许本输出可以直接从源站拉流，默认：false true：允许output访问 false：禁止output访问
    * allowAllIpAccess  是否放通所有的IP访问，默认：false true：允许所有的IP地址访问，ip_whitelist配置不生效 false：不允许所有的IP地址访问，ip_whitelist生效，仅在ip_whitelist配置的ip地址才能访问
    * ipWhitelist  当频道类型mode是ONLY_OS类型时，允许直接从源站拉流的IP白名单
    * cdnIdentifierHeader  cdnIdentifierHeader
    * originDomainMaster  源站分发域名-主region 跟CreateOttChannelInfoReq.region一致 满足正则：^(\\[a-zA-Z0-9]([a-zA-Z0-9\\-]{0,61}[a-zA-Z0-9])?\\.){2,}[a-zA-Z]{2,16}$ 最大长度255
    * originDomainSlave  源站分发域名-备region 满足正则：^(\\[a-zA-Z0-9]([a-zA-Z0-9\\-]{0,61}[a-zA-Z0-9])?\\.){2,}[a-zA-Z]{2,16}$ 最大长度255
    * manifestName  output的索引文件名字 默认：index 长度：0-128 字符集：大小写字母、数字、\"-\"、\".\"、\"_\"，不能有/路径
    * slaveUrl  客户自定义的拉流地址，包括方法、域名、路径
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'url' => 'url',
            'streamSelection' => 'stream_selection',
            'segmentDurationSeconds' => 'segment_duration_seconds',
            'playlistWindowSeconds' => 'playlist_window_seconds',
            'encryption' => 'encryption',
            'extArgs' => 'ext_args',
            'delaySegment' => 'delay_segment',
            'requestArgs' => 'request_args',
            'enableAccess' => 'enable_access',
            'allowAllIpAccess' => 'allow_all_ip_access',
            'ipWhitelist' => 'ip_whitelist',
            'cdnIdentifierHeader' => 'cdn_identifier_header',
            'originDomainMaster' => 'origin_domain_master',
            'originDomainSlave' => 'origin_domain_slave',
            'manifestName' => 'manifest_name',
            'slaveUrl' => 'slave_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * url  客户自定义的拉流地址，包括方法、域名、路径
    * streamSelection  从全量流中过滤出一个码率在[min, max]区间的流。如果不需要码率过滤可不选。
    * segmentDurationSeconds  频道输出分片的时长，为必选项  单位：秒。取值范围：1-10 > 修改分片时长会影响已录制内容的时移和回看服务，请谨慎修改！
    * playlistWindowSeconds  频道直播返回分片的窗口长度，为频道输出分片的时长乘以数量后得到的值。实际返回的分片数不小于3个。  单位：秒。取值范围：0 - 86400（24小时转化成秒后的取值）
    * encryption  encryption
    * extArgs  其他额外参数
    * delaySegment  延播时长，单位秒
    * requestArgs  requestArgs
    * enableAccess  当频道mode是ONLY_OS类型时，允许本输出可以直接从源站拉流，默认：false true：允许output访问 false：禁止output访问
    * allowAllIpAccess  是否放通所有的IP访问，默认：false true：允许所有的IP地址访问，ip_whitelist配置不生效 false：不允许所有的IP地址访问，ip_whitelist生效，仅在ip_whitelist配置的ip地址才能访问
    * ipWhitelist  当频道类型mode是ONLY_OS类型时，允许直接从源站拉流的IP白名单
    * cdnIdentifierHeader  cdnIdentifierHeader
    * originDomainMaster  源站分发域名-主region 跟CreateOttChannelInfoReq.region一致 满足正则：^(\\[a-zA-Z0-9]([a-zA-Z0-9\\-]{0,61}[a-zA-Z0-9])?\\.){2,}[a-zA-Z]{2,16}$ 最大长度255
    * originDomainSlave  源站分发域名-备region 满足正则：^(\\[a-zA-Z0-9]([a-zA-Z0-9\\-]{0,61}[a-zA-Z0-9])?\\.){2,}[a-zA-Z]{2,16}$ 最大长度255
    * manifestName  output的索引文件名字 默认：index 长度：0-128 字符集：大小写字母、数字、\"-\"、\".\"、\"_\"，不能有/路径
    * slaveUrl  客户自定义的拉流地址，包括方法、域名、路径
    *
    * @var string[]
    */
    protected static $setters = [
            'url' => 'setUrl',
            'streamSelection' => 'setStreamSelection',
            'segmentDurationSeconds' => 'setSegmentDurationSeconds',
            'playlistWindowSeconds' => 'setPlaylistWindowSeconds',
            'encryption' => 'setEncryption',
            'extArgs' => 'setExtArgs',
            'delaySegment' => 'setDelaySegment',
            'requestArgs' => 'setRequestArgs',
            'enableAccess' => 'setEnableAccess',
            'allowAllIpAccess' => 'setAllowAllIpAccess',
            'ipWhitelist' => 'setIpWhitelist',
            'cdnIdentifierHeader' => 'setCdnIdentifierHeader',
            'originDomainMaster' => 'setOriginDomainMaster',
            'originDomainSlave' => 'setOriginDomainSlave',
            'manifestName' => 'setManifestName',
            'slaveUrl' => 'setSlaveUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * url  客户自定义的拉流地址，包括方法、域名、路径
    * streamSelection  从全量流中过滤出一个码率在[min, max]区间的流。如果不需要码率过滤可不选。
    * segmentDurationSeconds  频道输出分片的时长，为必选项  单位：秒。取值范围：1-10 > 修改分片时长会影响已录制内容的时移和回看服务，请谨慎修改！
    * playlistWindowSeconds  频道直播返回分片的窗口长度，为频道输出分片的时长乘以数量后得到的值。实际返回的分片数不小于3个。  单位：秒。取值范围：0 - 86400（24小时转化成秒后的取值）
    * encryption  encryption
    * extArgs  其他额外参数
    * delaySegment  延播时长，单位秒
    * requestArgs  requestArgs
    * enableAccess  当频道mode是ONLY_OS类型时，允许本输出可以直接从源站拉流，默认：false true：允许output访问 false：禁止output访问
    * allowAllIpAccess  是否放通所有的IP访问，默认：false true：允许所有的IP地址访问，ip_whitelist配置不生效 false：不允许所有的IP地址访问，ip_whitelist生效，仅在ip_whitelist配置的ip地址才能访问
    * ipWhitelist  当频道类型mode是ONLY_OS类型时，允许直接从源站拉流的IP白名单
    * cdnIdentifierHeader  cdnIdentifierHeader
    * originDomainMaster  源站分发域名-主region 跟CreateOttChannelInfoReq.region一致 满足正则：^(\\[a-zA-Z0-9]([a-zA-Z0-9\\-]{0,61}[a-zA-Z0-9])?\\.){2,}[a-zA-Z]{2,16}$ 最大长度255
    * originDomainSlave  源站分发域名-备region 满足正则：^(\\[a-zA-Z0-9]([a-zA-Z0-9\\-]{0,61}[a-zA-Z0-9])?\\.){2,}[a-zA-Z]{2,16}$ 最大长度255
    * manifestName  output的索引文件名字 默认：index 长度：0-128 字符集：大小写字母、数字、\"-\"、\".\"、\"_\"，不能有/路径
    * slaveUrl  客户自定义的拉流地址，包括方法、域名、路径
    *
    * @var string[]
    */
    protected static $getters = [
            'url' => 'getUrl',
            'streamSelection' => 'getStreamSelection',
            'segmentDurationSeconds' => 'getSegmentDurationSeconds',
            'playlistWindowSeconds' => 'getPlaylistWindowSeconds',
            'encryption' => 'getEncryption',
            'extArgs' => 'getExtArgs',
            'delaySegment' => 'getDelaySegment',
            'requestArgs' => 'getRequestArgs',
            'enableAccess' => 'getEnableAccess',
            'allowAllIpAccess' => 'getAllowAllIpAccess',
            'ipWhitelist' => 'getIpWhitelist',
            'cdnIdentifierHeader' => 'getCdnIdentifierHeader',
            'originDomainMaster' => 'getOriginDomainMaster',
            'originDomainSlave' => 'getOriginDomainSlave',
            'manifestName' => 'getManifestName',
            'slaveUrl' => 'getSlaveUrl'
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['streamSelection'] = isset($data['streamSelection']) ? $data['streamSelection'] : null;
        $this->container['segmentDurationSeconds'] = isset($data['segmentDurationSeconds']) ? $data['segmentDurationSeconds'] : null;
        $this->container['playlistWindowSeconds'] = isset($data['playlistWindowSeconds']) ? $data['playlistWindowSeconds'] : null;
        $this->container['encryption'] = isset($data['encryption']) ? $data['encryption'] : null;
        $this->container['extArgs'] = isset($data['extArgs']) ? $data['extArgs'] : null;
        $this->container['delaySegment'] = isset($data['delaySegment']) ? $data['delaySegment'] : null;
        $this->container['requestArgs'] = isset($data['requestArgs']) ? $data['requestArgs'] : null;
        $this->container['enableAccess'] = isset($data['enableAccess']) ? $data['enableAccess'] : null;
        $this->container['allowAllIpAccess'] = isset($data['allowAllIpAccess']) ? $data['allowAllIpAccess'] : null;
        $this->container['ipWhitelist'] = isset($data['ipWhitelist']) ? $data['ipWhitelist'] : null;
        $this->container['cdnIdentifierHeader'] = isset($data['cdnIdentifierHeader']) ? $data['cdnIdentifierHeader'] : null;
        $this->container['originDomainMaster'] = isset($data['originDomainMaster']) ? $data['originDomainMaster'] : null;
        $this->container['originDomainSlave'] = isset($data['originDomainSlave']) ? $data['originDomainSlave'] : null;
        $this->container['manifestName'] = isset($data['manifestName']) ? $data['manifestName'] : null;
        $this->container['slaveUrl'] = isset($data['slaveUrl']) ? $data['slaveUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) > 1024)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) < 1)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['segmentDurationSeconds'] === null) {
            $invalidProperties[] = "'segmentDurationSeconds' can't be null";
        }
            if (($this->container['segmentDurationSeconds'] > 10)) {
                $invalidProperties[] = "invalid value for 'segmentDurationSeconds', must be smaller than or equal to 10.";
            }
            if (($this->container['segmentDurationSeconds'] < 1)) {
                $invalidProperties[] = "invalid value for 'segmentDurationSeconds', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['playlistWindowSeconds']) && ($this->container['playlistWindowSeconds'] > 86400)) {
                $invalidProperties[] = "invalid value for 'playlistWindowSeconds', must be smaller than or equal to 86400.";
            }
            if (!is_null($this->container['playlistWindowSeconds']) && ($this->container['playlistWindowSeconds'] < 0)) {
                $invalidProperties[] = "invalid value for 'playlistWindowSeconds', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['delaySegment']) && ($this->container['delaySegment'] > 10)) {
                $invalidProperties[] = "invalid value for 'delaySegment', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['delaySegment']) && ($this->container['delaySegment'] < 1)) {
                $invalidProperties[] = "invalid value for 'delaySegment', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ipWhitelist']) && (mb_strlen($this->container['ipWhitelist']) > 2048)) {
                $invalidProperties[] = "invalid value for 'ipWhitelist', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['ipWhitelist']) && (mb_strlen($this->container['ipWhitelist']) < 0)) {
                $invalidProperties[] = "invalid value for 'ipWhitelist', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['originDomainMaster']) && (mb_strlen($this->container['originDomainMaster']) > 255)) {
                $invalidProperties[] = "invalid value for 'originDomainMaster', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['originDomainMaster']) && (mb_strlen($this->container['originDomainMaster']) < 0)) {
                $invalidProperties[] = "invalid value for 'originDomainMaster', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['originDomainSlave']) && (mb_strlen($this->container['originDomainSlave']) > 255)) {
                $invalidProperties[] = "invalid value for 'originDomainSlave', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['originDomainSlave']) && (mb_strlen($this->container['originDomainSlave']) < 0)) {
                $invalidProperties[] = "invalid value for 'originDomainSlave', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['manifestName']) && (mb_strlen($this->container['manifestName']) > 128)) {
                $invalidProperties[] = "invalid value for 'manifestName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['manifestName']) && (mb_strlen($this->container['manifestName']) < 0)) {
                $invalidProperties[] = "invalid value for 'manifestName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['slaveUrl']) && (mb_strlen($this->container['slaveUrl']) > 1024)) {
                $invalidProperties[] = "invalid value for 'slaveUrl', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['slaveUrl']) && (mb_strlen($this->container['slaveUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'slaveUrl', the character length must be bigger than or equal to 0.";
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
    * Gets url
    *  客户自定义的拉流地址，包括方法、域名、路径
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url 客户自定义的拉流地址，包括方法、域名、路径
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets streamSelection
    *  从全量流中过滤出一个码率在[min, max]区间的流。如果不需要码率过滤可不选。
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\StreamSelectionItem[]|null
    */
    public function getStreamSelection()
    {
        return $this->container['streamSelection'];
    }

    /**
    * Sets streamSelection
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\StreamSelectionItem[]|null $streamSelection 从全量流中过滤出一个码率在[min, max]区间的流。如果不需要码率过滤可不选。
    *
    * @return $this
    */
    public function setStreamSelection($streamSelection)
    {
        $this->container['streamSelection'] = $streamSelection;
        return $this;
    }

    /**
    * Gets segmentDurationSeconds
    *  频道输出分片的时长，为必选项  单位：秒。取值范围：1-10 > 修改分片时长会影响已录制内容的时移和回看服务，请谨慎修改！
    *
    * @return int
    */
    public function getSegmentDurationSeconds()
    {
        return $this->container['segmentDurationSeconds'];
    }

    /**
    * Sets segmentDurationSeconds
    *
    * @param int $segmentDurationSeconds 频道输出分片的时长，为必选项  单位：秒。取值范围：1-10 > 修改分片时长会影响已录制内容的时移和回看服务，请谨慎修改！
    *
    * @return $this
    */
    public function setSegmentDurationSeconds($segmentDurationSeconds)
    {
        $this->container['segmentDurationSeconds'] = $segmentDurationSeconds;
        return $this;
    }

    /**
    * Gets playlistWindowSeconds
    *  频道直播返回分片的窗口长度，为频道输出分片的时长乘以数量后得到的值。实际返回的分片数不小于3个。  单位：秒。取值范围：0 - 86400（24小时转化成秒后的取值）
    *
    * @return int|null
    */
    public function getPlaylistWindowSeconds()
    {
        return $this->container['playlistWindowSeconds'];
    }

    /**
    * Sets playlistWindowSeconds
    *
    * @param int|null $playlistWindowSeconds 频道直播返回分片的窗口长度，为频道输出分片的时长乘以数量后得到的值。实际返回的分片数不小于3个。  单位：秒。取值范围：0 - 86400（24小时转化成秒后的取值）
    *
    * @return $this
    */
    public function setPlaylistWindowSeconds($playlistWindowSeconds)
    {
        $this->container['playlistWindowSeconds'] = $playlistWindowSeconds;
        return $this;
    }

    /**
    * Gets encryption
    *  encryption
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\Encryption|null
    */
    public function getEncryption()
    {
        return $this->container['encryption'];
    }

    /**
    * Sets encryption
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\Encryption|null $encryption encryption
    *
    * @return $this
    */
    public function setEncryption($encryption)
    {
        $this->container['encryption'] = $encryption;
        return $this;
    }

    /**
    * Gets extArgs
    *  其他额外参数
    *
    * @return object|null
    */
    public function getExtArgs()
    {
        return $this->container['extArgs'];
    }

    /**
    * Sets extArgs
    *
    * @param object|null $extArgs 其他额外参数
    *
    * @return $this
    */
    public function setExtArgs($extArgs)
    {
        $this->container['extArgs'] = $extArgs;
        return $this;
    }

    /**
    * Gets delaySegment
    *  延播时长，单位秒
    *
    * @return int|null
    */
    public function getDelaySegment()
    {
        return $this->container['delaySegment'];
    }

    /**
    * Sets delaySegment
    *
    * @param int|null $delaySegment 延播时长，单位秒
    *
    * @return $this
    */
    public function setDelaySegment($delaySegment)
    {
        $this->container['delaySegment'] = $delaySegment;
        return $this;
    }

    /**
    * Gets requestArgs
    *  requestArgs
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\PackageRequestArgs|null
    */
    public function getRequestArgs()
    {
        return $this->container['requestArgs'];
    }

    /**
    * Sets requestArgs
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\PackageRequestArgs|null $requestArgs requestArgs
    *
    * @return $this
    */
    public function setRequestArgs($requestArgs)
    {
        $this->container['requestArgs'] = $requestArgs;
        return $this;
    }

    /**
    * Gets enableAccess
    *  当频道mode是ONLY_OS类型时，允许本输出可以直接从源站拉流，默认：false true：允许output访问 false：禁止output访问
    *
    * @return bool|null
    */
    public function getEnableAccess()
    {
        return $this->container['enableAccess'];
    }

    /**
    * Sets enableAccess
    *
    * @param bool|null $enableAccess 当频道mode是ONLY_OS类型时，允许本输出可以直接从源站拉流，默认：false true：允许output访问 false：禁止output访问
    *
    * @return $this
    */
    public function setEnableAccess($enableAccess)
    {
        $this->container['enableAccess'] = $enableAccess;
        return $this;
    }

    /**
    * Gets allowAllIpAccess
    *  是否放通所有的IP访问，默认：false true：允许所有的IP地址访问，ip_whitelist配置不生效 false：不允许所有的IP地址访问，ip_whitelist生效，仅在ip_whitelist配置的ip地址才能访问
    *
    * @return bool|null
    */
    public function getAllowAllIpAccess()
    {
        return $this->container['allowAllIpAccess'];
    }

    /**
    * Sets allowAllIpAccess
    *
    * @param bool|null $allowAllIpAccess 是否放通所有的IP访问，默认：false true：允许所有的IP地址访问，ip_whitelist配置不生效 false：不允许所有的IP地址访问，ip_whitelist生效，仅在ip_whitelist配置的ip地址才能访问
    *
    * @return $this
    */
    public function setAllowAllIpAccess($allowAllIpAccess)
    {
        $this->container['allowAllIpAccess'] = $allowAllIpAccess;
        return $this;
    }

    /**
    * Gets ipWhitelist
    *  当频道类型mode是ONLY_OS类型时，允许直接从源站拉流的IP白名单
    *
    * @return string|null
    */
    public function getIpWhitelist()
    {
        return $this->container['ipWhitelist'];
    }

    /**
    * Sets ipWhitelist
    *
    * @param string|null $ipWhitelist 当频道类型mode是ONLY_OS类型时，允许直接从源站拉流的IP白名单
    *
    * @return $this
    */
    public function setIpWhitelist($ipWhitelist)
    {
        $this->container['ipWhitelist'] = $ipWhitelist;
        return $this;
    }

    /**
    * Gets cdnIdentifierHeader
    *  cdnIdentifierHeader
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\HttpHeader|null
    */
    public function getCdnIdentifierHeader()
    {
        return $this->container['cdnIdentifierHeader'];
    }

    /**
    * Sets cdnIdentifierHeader
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\HttpHeader|null $cdnIdentifierHeader cdnIdentifierHeader
    *
    * @return $this
    */
    public function setCdnIdentifierHeader($cdnIdentifierHeader)
    {
        $this->container['cdnIdentifierHeader'] = $cdnIdentifierHeader;
        return $this;
    }

    /**
    * Gets originDomainMaster
    *  源站分发域名-主region 跟CreateOttChannelInfoReq.region一致 满足正则：^(\\[a-zA-Z0-9]([a-zA-Z0-9\\-]{0,61}[a-zA-Z0-9])?\\.){2,}[a-zA-Z]{2,16}$ 最大长度255
    *
    * @return string|null
    */
    public function getOriginDomainMaster()
    {
        return $this->container['originDomainMaster'];
    }

    /**
    * Sets originDomainMaster
    *
    * @param string|null $originDomainMaster 源站分发域名-主region 跟CreateOttChannelInfoReq.region一致 满足正则：^(\\[a-zA-Z0-9]([a-zA-Z0-9\\-]{0,61}[a-zA-Z0-9])?\\.){2,}[a-zA-Z]{2,16}$ 最大长度255
    *
    * @return $this
    */
    public function setOriginDomainMaster($originDomainMaster)
    {
        $this->container['originDomainMaster'] = $originDomainMaster;
        return $this;
    }

    /**
    * Gets originDomainSlave
    *  源站分发域名-备region 满足正则：^(\\[a-zA-Z0-9]([a-zA-Z0-9\\-]{0,61}[a-zA-Z0-9])?\\.){2,}[a-zA-Z]{2,16}$ 最大长度255
    *
    * @return string|null
    */
    public function getOriginDomainSlave()
    {
        return $this->container['originDomainSlave'];
    }

    /**
    * Sets originDomainSlave
    *
    * @param string|null $originDomainSlave 源站分发域名-备region 满足正则：^(\\[a-zA-Z0-9]([a-zA-Z0-9\\-]{0,61}[a-zA-Z0-9])?\\.){2,}[a-zA-Z]{2,16}$ 最大长度255
    *
    * @return $this
    */
    public function setOriginDomainSlave($originDomainSlave)
    {
        $this->container['originDomainSlave'] = $originDomainSlave;
        return $this;
    }

    /**
    * Gets manifestName
    *  output的索引文件名字 默认：index 长度：0-128 字符集：大小写字母、数字、\"-\"、\".\"、\"_\"，不能有/路径
    *
    * @return string|null
    */
    public function getManifestName()
    {
        return $this->container['manifestName'];
    }

    /**
    * Sets manifestName
    *
    * @param string|null $manifestName output的索引文件名字 默认：index 长度：0-128 字符集：大小写字母、数字、\"-\"、\".\"、\"_\"，不能有/路径
    *
    * @return $this
    */
    public function setManifestName($manifestName)
    {
        $this->container['manifestName'] = $manifestName;
        return $this;
    }

    /**
    * Gets slaveUrl
    *  客户自定义的拉流地址，包括方法、域名、路径
    *
    * @return string|null
    */
    public function getSlaveUrl()
    {
        return $this->container['slaveUrl'];
    }

    /**
    * Sets slaveUrl
    *
    * @param string|null $slaveUrl 客户自定义的拉流地址，包括方法、域名、路径
    *
    * @return $this
    */
    public function setSlaveUrl($slaveUrl)
    {
        $this->container['slaveUrl'] = $slaveUrl;
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

