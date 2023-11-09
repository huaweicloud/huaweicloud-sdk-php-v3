<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ThreatIntelProperties implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ThreatIntelProperties';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fileMd5  恶意软件Md5。
    * fileSha1  恶意软件Sha1。
    * fileSha256  恶意软件Sha256值。
    * fileName  文件名称。
    * createTime  编译时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    * fileClass  文件类别，TEXT|XCODE。
    * fileFamily  家族，例如：wannacry（勒索软件）。
    * fileMaltype  类别，例如：trojan（特洛伊）。
    * ipResolvesToRefs  mac地址。
    * belongsToRefs  IP AS 自治系统。
    * ipLocation  地区 格式：country/provice/city/lngwgs/latwgs。
    * domainFamily  例如：banjori|iodine。
    * domainResolvesToRefs  解析的IP地址。
    * domainDnsType  DNS类别。A|NS|CNAME|TXT。
    * urlHost  例：3ms.huawei.com。
    * urlResolvesToRefs  IP地址。
    * displayName  显示名称。
    * urlBelongsToRef  邮箱账户，@之前部分。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fileMd5' => 'string',
            'fileSha1' => 'string',
            'fileSha256' => 'string',
            'fileName' => 'string',
            'createTime' => '\DateTime',
            'fileClass' => 'string',
            'fileFamily' => 'string',
            'fileMaltype' => 'string',
            'ipResolvesToRefs' => 'string',
            'belongsToRefs' => 'string',
            'ipLocation' => 'string',
            'domainFamily' => 'string',
            'domainResolvesToRefs' => 'string',
            'domainDnsType' => 'string',
            'urlHost' => 'string',
            'urlResolvesToRefs' => 'string',
            'displayName' => 'string',
            'urlBelongsToRef' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fileMd5  恶意软件Md5。
    * fileSha1  恶意软件Sha1。
    * fileSha256  恶意软件Sha256值。
    * fileName  文件名称。
    * createTime  编译时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    * fileClass  文件类别，TEXT|XCODE。
    * fileFamily  家族，例如：wannacry（勒索软件）。
    * fileMaltype  类别，例如：trojan（特洛伊）。
    * ipResolvesToRefs  mac地址。
    * belongsToRefs  IP AS 自治系统。
    * ipLocation  地区 格式：country/provice/city/lngwgs/latwgs。
    * domainFamily  例如：banjori|iodine。
    * domainResolvesToRefs  解析的IP地址。
    * domainDnsType  DNS类别。A|NS|CNAME|TXT。
    * urlHost  例：3ms.huawei.com。
    * urlResolvesToRefs  IP地址。
    * displayName  显示名称。
    * urlBelongsToRef  邮箱账户，@之前部分。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fileMd5' => null,
        'fileSha1' => null,
        'fileSha256' => null,
        'fileName' => null,
        'createTime' => 'date-time',
        'fileClass' => null,
        'fileFamily' => null,
        'fileMaltype' => null,
        'ipResolvesToRefs' => null,
        'belongsToRefs' => null,
        'ipLocation' => null,
        'domainFamily' => null,
        'domainResolvesToRefs' => null,
        'domainDnsType' => null,
        'urlHost' => null,
        'urlResolvesToRefs' => null,
        'displayName' => null,
        'urlBelongsToRef' => null
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
    * fileMd5  恶意软件Md5。
    * fileSha1  恶意软件Sha1。
    * fileSha256  恶意软件Sha256值。
    * fileName  文件名称。
    * createTime  编译时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    * fileClass  文件类别，TEXT|XCODE。
    * fileFamily  家族，例如：wannacry（勒索软件）。
    * fileMaltype  类别，例如：trojan（特洛伊）。
    * ipResolvesToRefs  mac地址。
    * belongsToRefs  IP AS 自治系统。
    * ipLocation  地区 格式：country/provice/city/lngwgs/latwgs。
    * domainFamily  例如：banjori|iodine。
    * domainResolvesToRefs  解析的IP地址。
    * domainDnsType  DNS类别。A|NS|CNAME|TXT。
    * urlHost  例：3ms.huawei.com。
    * urlResolvesToRefs  IP地址。
    * displayName  显示名称。
    * urlBelongsToRef  邮箱账户，@之前部分。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fileMd5' => 'file_md5',
            'fileSha1' => 'file_sha1',
            'fileSha256' => 'file_sha256',
            'fileName' => 'file_name',
            'createTime' => 'create_time',
            'fileClass' => 'file_class',
            'fileFamily' => 'file_family',
            'fileMaltype' => 'file_maltype',
            'ipResolvesToRefs' => 'ip_resolves_to_refs',
            'belongsToRefs' => 'belongs_to_refs',
            'ipLocation' => 'ip_location',
            'domainFamily' => 'domain_family',
            'domainResolvesToRefs' => 'domain_resolves_to_refs',
            'domainDnsType' => 'domain_dns_type',
            'urlHost' => 'url_host',
            'urlResolvesToRefs' => 'url_resolves_to_refs',
            'displayName' => 'display_name',
            'urlBelongsToRef' => 'url_belongs_to_ref'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fileMd5  恶意软件Md5。
    * fileSha1  恶意软件Sha1。
    * fileSha256  恶意软件Sha256值。
    * fileName  文件名称。
    * createTime  编译时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    * fileClass  文件类别，TEXT|XCODE。
    * fileFamily  家族，例如：wannacry（勒索软件）。
    * fileMaltype  类别，例如：trojan（特洛伊）。
    * ipResolvesToRefs  mac地址。
    * belongsToRefs  IP AS 自治系统。
    * ipLocation  地区 格式：country/provice/city/lngwgs/latwgs。
    * domainFamily  例如：banjori|iodine。
    * domainResolvesToRefs  解析的IP地址。
    * domainDnsType  DNS类别。A|NS|CNAME|TXT。
    * urlHost  例：3ms.huawei.com。
    * urlResolvesToRefs  IP地址。
    * displayName  显示名称。
    * urlBelongsToRef  邮箱账户，@之前部分。
    *
    * @var string[]
    */
    protected static $setters = [
            'fileMd5' => 'setFileMd5',
            'fileSha1' => 'setFileSha1',
            'fileSha256' => 'setFileSha256',
            'fileName' => 'setFileName',
            'createTime' => 'setCreateTime',
            'fileClass' => 'setFileClass',
            'fileFamily' => 'setFileFamily',
            'fileMaltype' => 'setFileMaltype',
            'ipResolvesToRefs' => 'setIpResolvesToRefs',
            'belongsToRefs' => 'setBelongsToRefs',
            'ipLocation' => 'setIpLocation',
            'domainFamily' => 'setDomainFamily',
            'domainResolvesToRefs' => 'setDomainResolvesToRefs',
            'domainDnsType' => 'setDomainDnsType',
            'urlHost' => 'setUrlHost',
            'urlResolvesToRefs' => 'setUrlResolvesToRefs',
            'displayName' => 'setDisplayName',
            'urlBelongsToRef' => 'setUrlBelongsToRef'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fileMd5  恶意软件Md5。
    * fileSha1  恶意软件Sha1。
    * fileSha256  恶意软件Sha256值。
    * fileName  文件名称。
    * createTime  编译时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    * fileClass  文件类别，TEXT|XCODE。
    * fileFamily  家族，例如：wannacry（勒索软件）。
    * fileMaltype  类别，例如：trojan（特洛伊）。
    * ipResolvesToRefs  mac地址。
    * belongsToRefs  IP AS 自治系统。
    * ipLocation  地区 格式：country/provice/city/lngwgs/latwgs。
    * domainFamily  例如：banjori|iodine。
    * domainResolvesToRefs  解析的IP地址。
    * domainDnsType  DNS类别。A|NS|CNAME|TXT。
    * urlHost  例：3ms.huawei.com。
    * urlResolvesToRefs  IP地址。
    * displayName  显示名称。
    * urlBelongsToRef  邮箱账户，@之前部分。
    *
    * @var string[]
    */
    protected static $getters = [
            'fileMd5' => 'getFileMd5',
            'fileSha1' => 'getFileSha1',
            'fileSha256' => 'getFileSha256',
            'fileName' => 'getFileName',
            'createTime' => 'getCreateTime',
            'fileClass' => 'getFileClass',
            'fileFamily' => 'getFileFamily',
            'fileMaltype' => 'getFileMaltype',
            'ipResolvesToRefs' => 'getIpResolvesToRefs',
            'belongsToRefs' => 'getBelongsToRefs',
            'ipLocation' => 'getIpLocation',
            'domainFamily' => 'getDomainFamily',
            'domainResolvesToRefs' => 'getDomainResolvesToRefs',
            'domainDnsType' => 'getDomainDnsType',
            'urlHost' => 'getUrlHost',
            'urlResolvesToRefs' => 'getUrlResolvesToRefs',
            'displayName' => 'getDisplayName',
            'urlBelongsToRef' => 'getUrlBelongsToRef'
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
        $this->container['fileMd5'] = isset($data['fileMd5']) ? $data['fileMd5'] : null;
        $this->container['fileSha1'] = isset($data['fileSha1']) ? $data['fileSha1'] : null;
        $this->container['fileSha256'] = isset($data['fileSha256']) ? $data['fileSha256'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['fileClass'] = isset($data['fileClass']) ? $data['fileClass'] : null;
        $this->container['fileFamily'] = isset($data['fileFamily']) ? $data['fileFamily'] : null;
        $this->container['fileMaltype'] = isset($data['fileMaltype']) ? $data['fileMaltype'] : null;
        $this->container['ipResolvesToRefs'] = isset($data['ipResolvesToRefs']) ? $data['ipResolvesToRefs'] : null;
        $this->container['belongsToRefs'] = isset($data['belongsToRefs']) ? $data['belongsToRefs'] : null;
        $this->container['ipLocation'] = isset($data['ipLocation']) ? $data['ipLocation'] : null;
        $this->container['domainFamily'] = isset($data['domainFamily']) ? $data['domainFamily'] : null;
        $this->container['domainResolvesToRefs'] = isset($data['domainResolvesToRefs']) ? $data['domainResolvesToRefs'] : null;
        $this->container['domainDnsType'] = isset($data['domainDnsType']) ? $data['domainDnsType'] : null;
        $this->container['urlHost'] = isset($data['urlHost']) ? $data['urlHost'] : null;
        $this->container['urlResolvesToRefs'] = isset($data['urlResolvesToRefs']) ? $data['urlResolvesToRefs'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['urlBelongsToRef'] = isset($data['urlBelongsToRef']) ? $data['urlBelongsToRef'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['fileMd5']) && (mb_strlen($this->container['fileMd5']) > 64)) {
                $invalidProperties[] = "invalid value for 'fileMd5', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['fileMd5']) && (mb_strlen($this->container['fileMd5']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileMd5', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileSha1']) && (mb_strlen($this->container['fileSha1']) > 255)) {
                $invalidProperties[] = "invalid value for 'fileSha1', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['fileSha1']) && (mb_strlen($this->container['fileSha1']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileSha1', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileSha256']) && (mb_strlen($this->container['fileSha256']) > 255)) {
                $invalidProperties[] = "invalid value for 'fileSha256', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['fileSha256']) && (mb_strlen($this->container['fileSha256']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileSha256', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) > 255)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileClass']) && (mb_strlen($this->container['fileClass']) > 255)) {
                $invalidProperties[] = "invalid value for 'fileClass', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['fileClass']) && (mb_strlen($this->container['fileClass']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileClass', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileFamily']) && (mb_strlen($this->container['fileFamily']) > 255)) {
                $invalidProperties[] = "invalid value for 'fileFamily', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['fileFamily']) && (mb_strlen($this->container['fileFamily']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileFamily', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileMaltype']) && (mb_strlen($this->container['fileMaltype']) > 255)) {
                $invalidProperties[] = "invalid value for 'fileMaltype', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['fileMaltype']) && (mb_strlen($this->container['fileMaltype']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileMaltype', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ipResolvesToRefs']) && (mb_strlen($this->container['ipResolvesToRefs']) > 255)) {
                $invalidProperties[] = "invalid value for 'ipResolvesToRefs', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['ipResolvesToRefs']) && (mb_strlen($this->container['ipResolvesToRefs']) < 1)) {
                $invalidProperties[] = "invalid value for 'ipResolvesToRefs', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['belongsToRefs']) && (mb_strlen($this->container['belongsToRefs']) > 255)) {
                $invalidProperties[] = "invalid value for 'belongsToRefs', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['belongsToRefs']) && (mb_strlen($this->container['belongsToRefs']) < 1)) {
                $invalidProperties[] = "invalid value for 'belongsToRefs', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ipLocation']) && (mb_strlen($this->container['ipLocation']) > 255)) {
                $invalidProperties[] = "invalid value for 'ipLocation', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['ipLocation']) && (mb_strlen($this->container['ipLocation']) < 1)) {
                $invalidProperties[] = "invalid value for 'ipLocation', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domainFamily']) && (mb_strlen($this->container['domainFamily']) > 255)) {
                $invalidProperties[] = "invalid value for 'domainFamily', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['domainFamily']) && (mb_strlen($this->container['domainFamily']) < 1)) {
                $invalidProperties[] = "invalid value for 'domainFamily', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domainResolvesToRefs']) && (mb_strlen($this->container['domainResolvesToRefs']) > 255)) {
                $invalidProperties[] = "invalid value for 'domainResolvesToRefs', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['domainResolvesToRefs']) && (mb_strlen($this->container['domainResolvesToRefs']) < 1)) {
                $invalidProperties[] = "invalid value for 'domainResolvesToRefs', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domainDnsType']) && (mb_strlen($this->container['domainDnsType']) > 255)) {
                $invalidProperties[] = "invalid value for 'domainDnsType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['domainDnsType']) && (mb_strlen($this->container['domainDnsType']) < 1)) {
                $invalidProperties[] = "invalid value for 'domainDnsType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['urlHost']) && (mb_strlen($this->container['urlHost']) > 255)) {
                $invalidProperties[] = "invalid value for 'urlHost', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['urlHost']) && (mb_strlen($this->container['urlHost']) < 1)) {
                $invalidProperties[] = "invalid value for 'urlHost', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['urlResolvesToRefs']) && (mb_strlen($this->container['urlResolvesToRefs']) > 255)) {
                $invalidProperties[] = "invalid value for 'urlResolvesToRefs', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['urlResolvesToRefs']) && (mb_strlen($this->container['urlResolvesToRefs']) < 1)) {
                $invalidProperties[] = "invalid value for 'urlResolvesToRefs', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['displayName']) && (mb_strlen($this->container['displayName']) > 128)) {
                $invalidProperties[] = "invalid value for 'displayName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['displayName']) && (mb_strlen($this->container['displayName']) < 1)) {
                $invalidProperties[] = "invalid value for 'displayName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['urlBelongsToRef']) && (mb_strlen($this->container['urlBelongsToRef']) > 128)) {
                $invalidProperties[] = "invalid value for 'urlBelongsToRef', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['urlBelongsToRef']) && (mb_strlen($this->container['urlBelongsToRef']) < 1)) {
                $invalidProperties[] = "invalid value for 'urlBelongsToRef', the character length must be bigger than or equal to 1.";
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
    * Gets fileMd5
    *  恶意软件Md5。
    *
    * @return string|null
    */
    public function getFileMd5()
    {
        return $this->container['fileMd5'];
    }

    /**
    * Sets fileMd5
    *
    * @param string|null $fileMd5 恶意软件Md5。
    *
    * @return $this
    */
    public function setFileMd5($fileMd5)
    {
        $this->container['fileMd5'] = $fileMd5;
        return $this;
    }

    /**
    * Gets fileSha1
    *  恶意软件Sha1。
    *
    * @return string|null
    */
    public function getFileSha1()
    {
        return $this->container['fileSha1'];
    }

    /**
    * Sets fileSha1
    *
    * @param string|null $fileSha1 恶意软件Sha1。
    *
    * @return $this
    */
    public function setFileSha1($fileSha1)
    {
        $this->container['fileSha1'] = $fileSha1;
        return $this;
    }

    /**
    * Gets fileSha256
    *  恶意软件Sha256值。
    *
    * @return string|null
    */
    public function getFileSha256()
    {
        return $this->container['fileSha256'];
    }

    /**
    * Sets fileSha256
    *
    * @param string|null $fileSha256 恶意软件Sha256值。
    *
    * @return $this
    */
    public function setFileSha256($fileSha256)
    {
        $this->container['fileSha256'] = $fileSha256;
        return $this;
    }

    /**
    * Gets fileName
    *  文件名称。
    *
    * @return string|null
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string|null $fileName 文件名称。
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets createTime
    *  编译时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 编译时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets fileClass
    *  文件类别，TEXT|XCODE。
    *
    * @return string|null
    */
    public function getFileClass()
    {
        return $this->container['fileClass'];
    }

    /**
    * Sets fileClass
    *
    * @param string|null $fileClass 文件类别，TEXT|XCODE。
    *
    * @return $this
    */
    public function setFileClass($fileClass)
    {
        $this->container['fileClass'] = $fileClass;
        return $this;
    }

    /**
    * Gets fileFamily
    *  家族，例如：wannacry（勒索软件）。
    *
    * @return string|null
    */
    public function getFileFamily()
    {
        return $this->container['fileFamily'];
    }

    /**
    * Sets fileFamily
    *
    * @param string|null $fileFamily 家族，例如：wannacry（勒索软件）。
    *
    * @return $this
    */
    public function setFileFamily($fileFamily)
    {
        $this->container['fileFamily'] = $fileFamily;
        return $this;
    }

    /**
    * Gets fileMaltype
    *  类别，例如：trojan（特洛伊）。
    *
    * @return string|null
    */
    public function getFileMaltype()
    {
        return $this->container['fileMaltype'];
    }

    /**
    * Sets fileMaltype
    *
    * @param string|null $fileMaltype 类别，例如：trojan（特洛伊）。
    *
    * @return $this
    */
    public function setFileMaltype($fileMaltype)
    {
        $this->container['fileMaltype'] = $fileMaltype;
        return $this;
    }

    /**
    * Gets ipResolvesToRefs
    *  mac地址。
    *
    * @return string|null
    */
    public function getIpResolvesToRefs()
    {
        return $this->container['ipResolvesToRefs'];
    }

    /**
    * Sets ipResolvesToRefs
    *
    * @param string|null $ipResolvesToRefs mac地址。
    *
    * @return $this
    */
    public function setIpResolvesToRefs($ipResolvesToRefs)
    {
        $this->container['ipResolvesToRefs'] = $ipResolvesToRefs;
        return $this;
    }

    /**
    * Gets belongsToRefs
    *  IP AS 自治系统。
    *
    * @return string|null
    */
    public function getBelongsToRefs()
    {
        return $this->container['belongsToRefs'];
    }

    /**
    * Sets belongsToRefs
    *
    * @param string|null $belongsToRefs IP AS 自治系统。
    *
    * @return $this
    */
    public function setBelongsToRefs($belongsToRefs)
    {
        $this->container['belongsToRefs'] = $belongsToRefs;
        return $this;
    }

    /**
    * Gets ipLocation
    *  地区 格式：country/provice/city/lngwgs/latwgs。
    *
    * @return string|null
    */
    public function getIpLocation()
    {
        return $this->container['ipLocation'];
    }

    /**
    * Sets ipLocation
    *
    * @param string|null $ipLocation 地区 格式：country/provice/city/lngwgs/latwgs。
    *
    * @return $this
    */
    public function setIpLocation($ipLocation)
    {
        $this->container['ipLocation'] = $ipLocation;
        return $this;
    }

    /**
    * Gets domainFamily
    *  例如：banjori|iodine。
    *
    * @return string|null
    */
    public function getDomainFamily()
    {
        return $this->container['domainFamily'];
    }

    /**
    * Sets domainFamily
    *
    * @param string|null $domainFamily 例如：banjori|iodine。
    *
    * @return $this
    */
    public function setDomainFamily($domainFamily)
    {
        $this->container['domainFamily'] = $domainFamily;
        return $this;
    }

    /**
    * Gets domainResolvesToRefs
    *  解析的IP地址。
    *
    * @return string|null
    */
    public function getDomainResolvesToRefs()
    {
        return $this->container['domainResolvesToRefs'];
    }

    /**
    * Sets domainResolvesToRefs
    *
    * @param string|null $domainResolvesToRefs 解析的IP地址。
    *
    * @return $this
    */
    public function setDomainResolvesToRefs($domainResolvesToRefs)
    {
        $this->container['domainResolvesToRefs'] = $domainResolvesToRefs;
        return $this;
    }

    /**
    * Gets domainDnsType
    *  DNS类别。A|NS|CNAME|TXT。
    *
    * @return string|null
    */
    public function getDomainDnsType()
    {
        return $this->container['domainDnsType'];
    }

    /**
    * Sets domainDnsType
    *
    * @param string|null $domainDnsType DNS类别。A|NS|CNAME|TXT。
    *
    * @return $this
    */
    public function setDomainDnsType($domainDnsType)
    {
        $this->container['domainDnsType'] = $domainDnsType;
        return $this;
    }

    /**
    * Gets urlHost
    *  例：3ms.huawei.com。
    *
    * @return string|null
    */
    public function getUrlHost()
    {
        return $this->container['urlHost'];
    }

    /**
    * Sets urlHost
    *
    * @param string|null $urlHost 例：3ms.huawei.com。
    *
    * @return $this
    */
    public function setUrlHost($urlHost)
    {
        $this->container['urlHost'] = $urlHost;
        return $this;
    }

    /**
    * Gets urlResolvesToRefs
    *  IP地址。
    *
    * @return string|null
    */
    public function getUrlResolvesToRefs()
    {
        return $this->container['urlResolvesToRefs'];
    }

    /**
    * Sets urlResolvesToRefs
    *
    * @param string|null $urlResolvesToRefs IP地址。
    *
    * @return $this
    */
    public function setUrlResolvesToRefs($urlResolvesToRefs)
    {
        $this->container['urlResolvesToRefs'] = $urlResolvesToRefs;
        return $this;
    }

    /**
    * Gets displayName
    *  显示名称。
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 显示名称。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets urlBelongsToRef
    *  邮箱账户，@之前部分。
    *
    * @return string|null
    */
    public function getUrlBelongsToRef()
    {
        return $this->container['urlBelongsToRef'];
    }

    /**
    * Sets urlBelongsToRef
    *
    * @param string|null $urlBelongsToRef 邮箱账户，@之前部分。
    *
    * @return $this
    */
    public function setUrlBelongsToRef($urlBelongsToRef)
    {
        $this->container['urlBelongsToRef'] = $urlBelongsToRef;
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

