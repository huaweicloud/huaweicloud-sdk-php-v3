<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchCreateCombinedPublicRecordsetsTaskRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchCreateCombinedPublicRecordsetsTaskRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * zoneNames  **参数解释：** 托管该记录的域名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * recordsetNamePrefixes  **参数解释：** 主机记录。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * records  **参数解释：** 解析记录的值。不同类型解析记录对应的值的规则不同。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * type  **参数解释：** 记录集的类型。 **约束限制：** 不涉及。 **取值范围：** - A：将域名解析到指定的IPv4地址。 - AAAA：将域名解析到指定的IPv6地址。 - MX：指定域名对应的邮件服务器。 - CNAME：将域名解析到另一域名，或者多个域名映射到同一域名上。 - TXT：用于对域名进行标识和说明。 - SRV：用于记录某台服务器对外提供了哪些服务。 - NS：指定域名的权威DNS服务器。 - CAA：指定为域名颁发HTTPS证书的授权CA机构，仅支持公网域名解析。  **默认取值：** 不涉及。
    * line  **参数解释：** 解析线路ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** default_view。
    * ttl  **参数解释：** 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 **约束限制：** 不涉及。 **取值范围：** 1~2147483647。 **默认取值：** 300
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'zoneNames' => 'string[]',
            'recordsetNamePrefixes' => 'string[]',
            'records' => 'string[]',
            'type' => 'string',
            'line' => 'string',
            'ttl' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * zoneNames  **参数解释：** 托管该记录的域名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * recordsetNamePrefixes  **参数解释：** 主机记录。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * records  **参数解释：** 解析记录的值。不同类型解析记录对应的值的规则不同。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * type  **参数解释：** 记录集的类型。 **约束限制：** 不涉及。 **取值范围：** - A：将域名解析到指定的IPv4地址。 - AAAA：将域名解析到指定的IPv6地址。 - MX：指定域名对应的邮件服务器。 - CNAME：将域名解析到另一域名，或者多个域名映射到同一域名上。 - TXT：用于对域名进行标识和说明。 - SRV：用于记录某台服务器对外提供了哪些服务。 - NS：指定域名的权威DNS服务器。 - CAA：指定为域名颁发HTTPS证书的授权CA机构，仅支持公网域名解析。  **默认取值：** 不涉及。
    * line  **参数解释：** 解析线路ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** default_view。
    * ttl  **参数解释：** 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 **约束限制：** 不涉及。 **取值范围：** 1~2147483647。 **默认取值：** 300
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'zoneNames' => null,
        'recordsetNamePrefixes' => null,
        'records' => null,
        'type' => null,
        'line' => null,
        'ttl' => 'int32'
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
    * zoneNames  **参数解释：** 托管该记录的域名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * recordsetNamePrefixes  **参数解释：** 主机记录。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * records  **参数解释：** 解析记录的值。不同类型解析记录对应的值的规则不同。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * type  **参数解释：** 记录集的类型。 **约束限制：** 不涉及。 **取值范围：** - A：将域名解析到指定的IPv4地址。 - AAAA：将域名解析到指定的IPv6地址。 - MX：指定域名对应的邮件服务器。 - CNAME：将域名解析到另一域名，或者多个域名映射到同一域名上。 - TXT：用于对域名进行标识和说明。 - SRV：用于记录某台服务器对外提供了哪些服务。 - NS：指定域名的权威DNS服务器。 - CAA：指定为域名颁发HTTPS证书的授权CA机构，仅支持公网域名解析。  **默认取值：** 不涉及。
    * line  **参数解释：** 解析线路ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** default_view。
    * ttl  **参数解释：** 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 **约束限制：** 不涉及。 **取值范围：** 1~2147483647。 **默认取值：** 300
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'zoneNames' => 'zone_names',
            'recordsetNamePrefixes' => 'recordset_name_prefixes',
            'records' => 'records',
            'type' => 'type',
            'line' => 'line',
            'ttl' => 'ttl'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * zoneNames  **参数解释：** 托管该记录的域名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * recordsetNamePrefixes  **参数解释：** 主机记录。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * records  **参数解释：** 解析记录的值。不同类型解析记录对应的值的规则不同。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * type  **参数解释：** 记录集的类型。 **约束限制：** 不涉及。 **取值范围：** - A：将域名解析到指定的IPv4地址。 - AAAA：将域名解析到指定的IPv6地址。 - MX：指定域名对应的邮件服务器。 - CNAME：将域名解析到另一域名，或者多个域名映射到同一域名上。 - TXT：用于对域名进行标识和说明。 - SRV：用于记录某台服务器对外提供了哪些服务。 - NS：指定域名的权威DNS服务器。 - CAA：指定为域名颁发HTTPS证书的授权CA机构，仅支持公网域名解析。  **默认取值：** 不涉及。
    * line  **参数解释：** 解析线路ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** default_view。
    * ttl  **参数解释：** 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 **约束限制：** 不涉及。 **取值范围：** 1~2147483647。 **默认取值：** 300
    *
    * @var string[]
    */
    protected static $setters = [
            'zoneNames' => 'setZoneNames',
            'recordsetNamePrefixes' => 'setRecordsetNamePrefixes',
            'records' => 'setRecords',
            'type' => 'setType',
            'line' => 'setLine',
            'ttl' => 'setTtl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * zoneNames  **参数解释：** 托管该记录的域名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * recordsetNamePrefixes  **参数解释：** 主机记录。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * records  **参数解释：** 解析记录的值。不同类型解析记录对应的值的规则不同。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * type  **参数解释：** 记录集的类型。 **约束限制：** 不涉及。 **取值范围：** - A：将域名解析到指定的IPv4地址。 - AAAA：将域名解析到指定的IPv6地址。 - MX：指定域名对应的邮件服务器。 - CNAME：将域名解析到另一域名，或者多个域名映射到同一域名上。 - TXT：用于对域名进行标识和说明。 - SRV：用于记录某台服务器对外提供了哪些服务。 - NS：指定域名的权威DNS服务器。 - CAA：指定为域名颁发HTTPS证书的授权CA机构，仅支持公网域名解析。  **默认取值：** 不涉及。
    * line  **参数解释：** 解析线路ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** default_view。
    * ttl  **参数解释：** 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 **约束限制：** 不涉及。 **取值范围：** 1~2147483647。 **默认取值：** 300
    *
    * @var string[]
    */
    protected static $getters = [
            'zoneNames' => 'getZoneNames',
            'recordsetNamePrefixes' => 'getRecordsetNamePrefixes',
            'records' => 'getRecords',
            'type' => 'getType',
            'line' => 'getLine',
            'ttl' => 'getTtl'
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
        $this->container['zoneNames'] = isset($data['zoneNames']) ? $data['zoneNames'] : null;
        $this->container['recordsetNamePrefixes'] = isset($data['recordsetNamePrefixes']) ? $data['recordsetNamePrefixes'] : null;
        $this->container['records'] = isset($data['records']) ? $data['records'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['line'] = isset($data['line']) ? $data['line'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['zoneNames'] === null) {
            $invalidProperties[] = "'zoneNames' can't be null";
        }
        if ($this->container['recordsetNamePrefixes'] === null) {
            $invalidProperties[] = "'recordsetNamePrefixes' can't be null";
        }
        if ($this->container['records'] === null) {
            $invalidProperties[] = "'records' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if (!preg_match("/A|CNAME|MX|AAAA|TXT|SRV|NS|CAA/", $this->container['type'])) {
                $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /A|CNAME|MX|AAAA|TXT|SRV|NS|CAA/.";
            }
            if (!is_null($this->container['line']) && !preg_match("/[0-9a-zA-Z-_]{1,64}/", $this->container['line'])) {
                $invalidProperties[] = "invalid value for 'line', must be conform to the pattern /[0-9a-zA-Z-_]{1,64}/.";
            }
            if (!is_null($this->container['ttl']) && ($this->container['ttl'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'ttl', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['ttl']) && ($this->container['ttl'] < 1)) {
                $invalidProperties[] = "invalid value for 'ttl', must be bigger than or equal to 1.";
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
    * Gets zoneNames
    *  **参数解释：** 托管该记录的域名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string[]
    */
    public function getZoneNames()
    {
        return $this->container['zoneNames'];
    }

    /**
    * Sets zoneNames
    *
    * @param string[] $zoneNames **参数解释：** 托管该记录的域名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setZoneNames($zoneNames)
    {
        $this->container['zoneNames'] = $zoneNames;
        return $this;
    }

    /**
    * Gets recordsetNamePrefixes
    *  **参数解释：** 主机记录。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string[]
    */
    public function getRecordsetNamePrefixes()
    {
        return $this->container['recordsetNamePrefixes'];
    }

    /**
    * Sets recordsetNamePrefixes
    *
    * @param string[] $recordsetNamePrefixes **参数解释：** 主机记录。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setRecordsetNamePrefixes($recordsetNamePrefixes)
    {
        $this->container['recordsetNamePrefixes'] = $recordsetNamePrefixes;
        return $this;
    }

    /**
    * Gets records
    *  **参数解释：** 解析记录的值。不同类型解析记录对应的值的规则不同。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string[]
    */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
    * Sets records
    *
    * @param string[] $records **参数解释：** 解析记录的值。不同类型解析记录对应的值的规则不同。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setRecords($records)
    {
        $this->container['records'] = $records;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 记录集的类型。 **约束限制：** 不涉及。 **取值范围：** - A：将域名解析到指定的IPv4地址。 - AAAA：将域名解析到指定的IPv6地址。 - MX：指定域名对应的邮件服务器。 - CNAME：将域名解析到另一域名，或者多个域名映射到同一域名上。 - TXT：用于对域名进行标识和说明。 - SRV：用于记录某台服务器对外提供了哪些服务。 - NS：指定域名的权威DNS服务器。 - CAA：指定为域名颁发HTTPS证书的授权CA机构，仅支持公网域名解析。  **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释：** 记录集的类型。 **约束限制：** 不涉及。 **取值范围：** - A：将域名解析到指定的IPv4地址。 - AAAA：将域名解析到指定的IPv6地址。 - MX：指定域名对应的邮件服务器。 - CNAME：将域名解析到另一域名，或者多个域名映射到同一域名上。 - TXT：用于对域名进行标识和说明。 - SRV：用于记录某台服务器对外提供了哪些服务。 - NS：指定域名的权威DNS服务器。 - CAA：指定为域名颁发HTTPS证书的授权CA机构，仅支持公网域名解析。  **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets line
    *  **参数解释：** 解析线路ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** default_view。
    *
    * @return string|null
    */
    public function getLine()
    {
        return $this->container['line'];
    }

    /**
    * Sets line
    *
    * @param string|null $line **参数解释：** 解析线路ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** default_view。
    *
    * @return $this
    */
    public function setLine($line)
    {
        $this->container['line'] = $line;
        return $this;
    }

    /**
    * Gets ttl
    *  **参数解释：** 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 **约束限制：** 不涉及。 **取值范围：** 1~2147483647。 **默认取值：** 300
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
    * @param int|null $ttl **参数解释：** 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 **约束限制：** 不涉及。 **取值范围：** 1~2147483647。 **默认取值：** 300
    *
    * @return $this
    */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;
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

