<?php

namespace HuaweiCloud\SDK\Bms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OsChange implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OsChange';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * adminpass  裸金属服务器管理员帐号的初始登录密码。其中，Linux管理员帐户为root，Windows管理员帐户为Administrator。建议密码复杂度如下：长度为8-26位。密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。密码不能包含用户名或用户名的逆序。 说明：对于Windows裸金属服务器，不能包含用户名中超过两个连续字符的部分。对于Linux裸金属服务器也可使用user_data字段实现密码注入，此时adminpass字段无效。adminpass和keyname不能同时有值。adminpass和keyname如果同时为空，此时，metadata中的user_data属性必须有值。
    * keyname  密钥名称。密钥可以通过7.10.3-创建和导入SSH密钥（OpenStack原生）API创建，或者使用7.10.1-查询SSH密钥列表（OpenStack原生）API查询已有的密钥。
    * userid  用户ID（登录管理控制台，进入我的凭证，即可看到“用户ID”）。
    * imageid  镜像ID。镜像ID可以从镜像服务控制台获取，或者参考《镜像服务API参考》的“查询镜像列表”章节查询。在使用“查询镜像列表”API查询时，可以添加过滤字段“?virtual_env_type=Ironic”来筛选裸金属服务器镜像。
    * metadata  metadata
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'adminpass' => 'string',
            'keyname' => 'string',
            'userid' => 'string',
            'imageid' => 'string',
            'metadata' => '\HuaweiCloud\SDK\Bms\V1\Model\MetadataInstall'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * adminpass  裸金属服务器管理员帐号的初始登录密码。其中，Linux管理员帐户为root，Windows管理员帐户为Administrator。建议密码复杂度如下：长度为8-26位。密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。密码不能包含用户名或用户名的逆序。 说明：对于Windows裸金属服务器，不能包含用户名中超过两个连续字符的部分。对于Linux裸金属服务器也可使用user_data字段实现密码注入，此时adminpass字段无效。adminpass和keyname不能同时有值。adminpass和keyname如果同时为空，此时，metadata中的user_data属性必须有值。
    * keyname  密钥名称。密钥可以通过7.10.3-创建和导入SSH密钥（OpenStack原生）API创建，或者使用7.10.1-查询SSH密钥列表（OpenStack原生）API查询已有的密钥。
    * userid  用户ID（登录管理控制台，进入我的凭证，即可看到“用户ID”）。
    * imageid  镜像ID。镜像ID可以从镜像服务控制台获取，或者参考《镜像服务API参考》的“查询镜像列表”章节查询。在使用“查询镜像列表”API查询时，可以添加过滤字段“?virtual_env_type=Ironic”来筛选裸金属服务器镜像。
    * metadata  metadata
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'adminpass' => 'password',
        'keyname' => null,
        'userid' => null,
        'imageid' => null,
        'metadata' => null
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
    * adminpass  裸金属服务器管理员帐号的初始登录密码。其中，Linux管理员帐户为root，Windows管理员帐户为Administrator。建议密码复杂度如下：长度为8-26位。密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。密码不能包含用户名或用户名的逆序。 说明：对于Windows裸金属服务器，不能包含用户名中超过两个连续字符的部分。对于Linux裸金属服务器也可使用user_data字段实现密码注入，此时adminpass字段无效。adminpass和keyname不能同时有值。adminpass和keyname如果同时为空，此时，metadata中的user_data属性必须有值。
    * keyname  密钥名称。密钥可以通过7.10.3-创建和导入SSH密钥（OpenStack原生）API创建，或者使用7.10.1-查询SSH密钥列表（OpenStack原生）API查询已有的密钥。
    * userid  用户ID（登录管理控制台，进入我的凭证，即可看到“用户ID”）。
    * imageid  镜像ID。镜像ID可以从镜像服务控制台获取，或者参考《镜像服务API参考》的“查询镜像列表”章节查询。在使用“查询镜像列表”API查询时，可以添加过滤字段“?virtual_env_type=Ironic”来筛选裸金属服务器镜像。
    * metadata  metadata
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'adminpass' => 'adminpass',
            'keyname' => 'keyname',
            'userid' => 'userid',
            'imageid' => 'imageid',
            'metadata' => 'metadata'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * adminpass  裸金属服务器管理员帐号的初始登录密码。其中，Linux管理员帐户为root，Windows管理员帐户为Administrator。建议密码复杂度如下：长度为8-26位。密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。密码不能包含用户名或用户名的逆序。 说明：对于Windows裸金属服务器，不能包含用户名中超过两个连续字符的部分。对于Linux裸金属服务器也可使用user_data字段实现密码注入，此时adminpass字段无效。adminpass和keyname不能同时有值。adminpass和keyname如果同时为空，此时，metadata中的user_data属性必须有值。
    * keyname  密钥名称。密钥可以通过7.10.3-创建和导入SSH密钥（OpenStack原生）API创建，或者使用7.10.1-查询SSH密钥列表（OpenStack原生）API查询已有的密钥。
    * userid  用户ID（登录管理控制台，进入我的凭证，即可看到“用户ID”）。
    * imageid  镜像ID。镜像ID可以从镜像服务控制台获取，或者参考《镜像服务API参考》的“查询镜像列表”章节查询。在使用“查询镜像列表”API查询时，可以添加过滤字段“?virtual_env_type=Ironic”来筛选裸金属服务器镜像。
    * metadata  metadata
    *
    * @var string[]
    */
    protected static $setters = [
            'adminpass' => 'setAdminpass',
            'keyname' => 'setKeyname',
            'userid' => 'setUserid',
            'imageid' => 'setImageid',
            'metadata' => 'setMetadata'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * adminpass  裸金属服务器管理员帐号的初始登录密码。其中，Linux管理员帐户为root，Windows管理员帐户为Administrator。建议密码复杂度如下：长度为8-26位。密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。密码不能包含用户名或用户名的逆序。 说明：对于Windows裸金属服务器，不能包含用户名中超过两个连续字符的部分。对于Linux裸金属服务器也可使用user_data字段实现密码注入，此时adminpass字段无效。adminpass和keyname不能同时有值。adminpass和keyname如果同时为空，此时，metadata中的user_data属性必须有值。
    * keyname  密钥名称。密钥可以通过7.10.3-创建和导入SSH密钥（OpenStack原生）API创建，或者使用7.10.1-查询SSH密钥列表（OpenStack原生）API查询已有的密钥。
    * userid  用户ID（登录管理控制台，进入我的凭证，即可看到“用户ID”）。
    * imageid  镜像ID。镜像ID可以从镜像服务控制台获取，或者参考《镜像服务API参考》的“查询镜像列表”章节查询。在使用“查询镜像列表”API查询时，可以添加过滤字段“?virtual_env_type=Ironic”来筛选裸金属服务器镜像。
    * metadata  metadata
    *
    * @var string[]
    */
    protected static $getters = [
            'adminpass' => 'getAdminpass',
            'keyname' => 'getKeyname',
            'userid' => 'getUserid',
            'imageid' => 'getImageid',
            'metadata' => 'getMetadata'
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
        $this->container['adminpass'] = isset($data['adminpass']) ? $data['adminpass'] : null;
        $this->container['keyname'] = isset($data['keyname']) ? $data['keyname'] : null;
        $this->container['userid'] = isset($data['userid']) ? $data['userid'] : null;
        $this->container['imageid'] = isset($data['imageid']) ? $data['imageid'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['adminpass']) && !preg_match("/[A-Za-z0-9!@$%^-_=+[{}]:,.\/?]*$/", $this->container['adminpass'])) {
                $invalidProperties[] = "invalid value for 'adminpass', must be conform to the pattern /[A-Za-z0-9!@$%^-_=+[{}]:,.\/?]*$/.";
            }
        if ($this->container['imageid'] === null) {
            $invalidProperties[] = "'imageid' can't be null";
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
    * Gets adminpass
    *  裸金属服务器管理员帐号的初始登录密码。其中，Linux管理员帐户为root，Windows管理员帐户为Administrator。建议密码复杂度如下：长度为8-26位。密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。密码不能包含用户名或用户名的逆序。 说明：对于Windows裸金属服务器，不能包含用户名中超过两个连续字符的部分。对于Linux裸金属服务器也可使用user_data字段实现密码注入，此时adminpass字段无效。adminpass和keyname不能同时有值。adminpass和keyname如果同时为空，此时，metadata中的user_data属性必须有值。
    *
    * @return string|null
    */
    public function getAdminpass()
    {
        return $this->container['adminpass'];
    }

    /**
    * Sets adminpass
    *
    * @param string|null $adminpass 裸金属服务器管理员帐号的初始登录密码。其中，Linux管理员帐户为root，Windows管理员帐户为Administrator。建议密码复杂度如下：长度为8-26位。密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。密码不能包含用户名或用户名的逆序。 说明：对于Windows裸金属服务器，不能包含用户名中超过两个连续字符的部分。对于Linux裸金属服务器也可使用user_data字段实现密码注入，此时adminpass字段无效。adminpass和keyname不能同时有值。adminpass和keyname如果同时为空，此时，metadata中的user_data属性必须有值。
    *
    * @return $this
    */
    public function setAdminpass($adminpass)
    {
        $this->container['adminpass'] = $adminpass;
        return $this;
    }

    /**
    * Gets keyname
    *  密钥名称。密钥可以通过7.10.3-创建和导入SSH密钥（OpenStack原生）API创建，或者使用7.10.1-查询SSH密钥列表（OpenStack原生）API查询已有的密钥。
    *
    * @return string|null
    */
    public function getKeyname()
    {
        return $this->container['keyname'];
    }

    /**
    * Sets keyname
    *
    * @param string|null $keyname 密钥名称。密钥可以通过7.10.3-创建和导入SSH密钥（OpenStack原生）API创建，或者使用7.10.1-查询SSH密钥列表（OpenStack原生）API查询已有的密钥。
    *
    * @return $this
    */
    public function setKeyname($keyname)
    {
        $this->container['keyname'] = $keyname;
        return $this;
    }

    /**
    * Gets userid
    *  用户ID（登录管理控制台，进入我的凭证，即可看到“用户ID”）。
    *
    * @return string|null
    */
    public function getUserid()
    {
        return $this->container['userid'];
    }

    /**
    * Sets userid
    *
    * @param string|null $userid 用户ID（登录管理控制台，进入我的凭证，即可看到“用户ID”）。
    *
    * @return $this
    */
    public function setUserid($userid)
    {
        $this->container['userid'] = $userid;
        return $this;
    }

    /**
    * Gets imageid
    *  镜像ID。镜像ID可以从镜像服务控制台获取，或者参考《镜像服务API参考》的“查询镜像列表”章节查询。在使用“查询镜像列表”API查询时，可以添加过滤字段“?virtual_env_type=Ironic”来筛选裸金属服务器镜像。
    *
    * @return string
    */
    public function getImageid()
    {
        return $this->container['imageid'];
    }

    /**
    * Sets imageid
    *
    * @param string $imageid 镜像ID。镜像ID可以从镜像服务控制台获取，或者参考《镜像服务API参考》的“查询镜像列表”章节查询。在使用“查询镜像列表”API查询时，可以添加过滤字段“?virtual_env_type=Ironic”来筛选裸金属服务器镜像。
    *
    * @return $this
    */
    public function setImageid($imageid)
    {
        $this->container['imageid'] = $imageid;
        return $this;
    }

    /**
    * Gets metadata
    *  metadata
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\MetadataInstall|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\MetadataInstall|null $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
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

