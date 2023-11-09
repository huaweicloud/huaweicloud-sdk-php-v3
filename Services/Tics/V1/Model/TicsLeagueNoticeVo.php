<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TicsLeagueNoticeVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TicsLeagueNoticeVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bcsChannelName  BCS通道名称
    * bcsIp  BCS浏览器ip
    * bcsOrgName  BCS组织名称
    * blockChainId  BCS服务实例ID
    * blockChainName  BCS服务实例名称
    * createTime  创建时间
    * creatorName  创建人名称
    * description  描述信息
    * expireTime  过期时间
    * id  联盟id
    * name  联盟名称
    * partners  联盟成员数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bcsChannelName' => 'string',
            'bcsIp' => 'string',
            'bcsOrgName' => 'string',
            'blockChainId' => 'string',
            'blockChainName' => 'string',
            'createTime' => 'int',
            'creatorName' => 'string',
            'description' => 'string',
            'expireTime' => 'int',
            'id' => 'string',
            'name' => 'string',
            'partners' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bcsChannelName  BCS通道名称
    * bcsIp  BCS浏览器ip
    * bcsOrgName  BCS组织名称
    * blockChainId  BCS服务实例ID
    * blockChainName  BCS服务实例名称
    * createTime  创建时间
    * creatorName  创建人名称
    * description  描述信息
    * expireTime  过期时间
    * id  联盟id
    * name  联盟名称
    * partners  联盟成员数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bcsChannelName' => null,
        'bcsIp' => null,
        'bcsOrgName' => null,
        'blockChainId' => null,
        'blockChainName' => null,
        'createTime' => 'int64',
        'creatorName' => null,
        'description' => null,
        'expireTime' => 'int64',
        'id' => null,
        'name' => null,
        'partners' => 'int64'
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
    * bcsChannelName  BCS通道名称
    * bcsIp  BCS浏览器ip
    * bcsOrgName  BCS组织名称
    * blockChainId  BCS服务实例ID
    * blockChainName  BCS服务实例名称
    * createTime  创建时间
    * creatorName  创建人名称
    * description  描述信息
    * expireTime  过期时间
    * id  联盟id
    * name  联盟名称
    * partners  联盟成员数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bcsChannelName' => 'bcs_channel_name',
            'bcsIp' => 'bcs_ip',
            'bcsOrgName' => 'bcs_org_name',
            'blockChainId' => 'block_chain_id',
            'blockChainName' => 'block_chain_name',
            'createTime' => 'create_time',
            'creatorName' => 'creator_name',
            'description' => 'description',
            'expireTime' => 'expire_time',
            'id' => 'id',
            'name' => 'name',
            'partners' => 'partners'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bcsChannelName  BCS通道名称
    * bcsIp  BCS浏览器ip
    * bcsOrgName  BCS组织名称
    * blockChainId  BCS服务实例ID
    * blockChainName  BCS服务实例名称
    * createTime  创建时间
    * creatorName  创建人名称
    * description  描述信息
    * expireTime  过期时间
    * id  联盟id
    * name  联盟名称
    * partners  联盟成员数
    *
    * @var string[]
    */
    protected static $setters = [
            'bcsChannelName' => 'setBcsChannelName',
            'bcsIp' => 'setBcsIp',
            'bcsOrgName' => 'setBcsOrgName',
            'blockChainId' => 'setBlockChainId',
            'blockChainName' => 'setBlockChainName',
            'createTime' => 'setCreateTime',
            'creatorName' => 'setCreatorName',
            'description' => 'setDescription',
            'expireTime' => 'setExpireTime',
            'id' => 'setId',
            'name' => 'setName',
            'partners' => 'setPartners'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bcsChannelName  BCS通道名称
    * bcsIp  BCS浏览器ip
    * bcsOrgName  BCS组织名称
    * blockChainId  BCS服务实例ID
    * blockChainName  BCS服务实例名称
    * createTime  创建时间
    * creatorName  创建人名称
    * description  描述信息
    * expireTime  过期时间
    * id  联盟id
    * name  联盟名称
    * partners  联盟成员数
    *
    * @var string[]
    */
    protected static $getters = [
            'bcsChannelName' => 'getBcsChannelName',
            'bcsIp' => 'getBcsIp',
            'bcsOrgName' => 'getBcsOrgName',
            'blockChainId' => 'getBlockChainId',
            'blockChainName' => 'getBlockChainName',
            'createTime' => 'getCreateTime',
            'creatorName' => 'getCreatorName',
            'description' => 'getDescription',
            'expireTime' => 'getExpireTime',
            'id' => 'getId',
            'name' => 'getName',
            'partners' => 'getPartners'
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
        $this->container['bcsChannelName'] = isset($data['bcsChannelName']) ? $data['bcsChannelName'] : null;
        $this->container['bcsIp'] = isset($data['bcsIp']) ? $data['bcsIp'] : null;
        $this->container['bcsOrgName'] = isset($data['bcsOrgName']) ? $data['bcsOrgName'] : null;
        $this->container['blockChainId'] = isset($data['blockChainId']) ? $data['blockChainId'] : null;
        $this->container['blockChainName'] = isset($data['blockChainName']) ? $data['blockChainName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['partners'] = isset($data['partners']) ? $data['partners'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['bcsChannelName']) && (mb_strlen($this->container['bcsChannelName']) > 128)) {
                $invalidProperties[] = "invalid value for 'bcsChannelName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['bcsChannelName']) && (mb_strlen($this->container['bcsChannelName']) < 0)) {
                $invalidProperties[] = "invalid value for 'bcsChannelName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bcsIp']) && (mb_strlen($this->container['bcsIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'bcsIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['bcsIp']) && (mb_strlen($this->container['bcsIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'bcsIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bcsOrgName']) && (mb_strlen($this->container['bcsOrgName']) > 128)) {
                $invalidProperties[] = "invalid value for 'bcsOrgName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['bcsOrgName']) && (mb_strlen($this->container['bcsOrgName']) < 0)) {
                $invalidProperties[] = "invalid value for 'bcsOrgName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['blockChainId']) && (mb_strlen($this->container['blockChainId']) > 64)) {
                $invalidProperties[] = "invalid value for 'blockChainId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['blockChainId']) && (mb_strlen($this->container['blockChainId']) < 0)) {
                $invalidProperties[] = "invalid value for 'blockChainId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['blockChainName']) && (mb_strlen($this->container['blockChainName']) > 128)) {
                $invalidProperties[] = "invalid value for 'blockChainName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['blockChainName']) && (mb_strlen($this->container['blockChainName']) < 0)) {
                $invalidProperties[] = "invalid value for 'blockChainName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['creatorName'] === null) {
            $invalidProperties[] = "'creatorName' can't be null";
        }
            if ((mb_strlen($this->container['creatorName']) > 128)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['creatorName']) < 0)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 512)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['partners'] === null) {
            $invalidProperties[] = "'partners' can't be null";
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
    * Gets bcsChannelName
    *  BCS通道名称
    *
    * @return string|null
    */
    public function getBcsChannelName()
    {
        return $this->container['bcsChannelName'];
    }

    /**
    * Sets bcsChannelName
    *
    * @param string|null $bcsChannelName BCS通道名称
    *
    * @return $this
    */
    public function setBcsChannelName($bcsChannelName)
    {
        $this->container['bcsChannelName'] = $bcsChannelName;
        return $this;
    }

    /**
    * Gets bcsIp
    *  BCS浏览器ip
    *
    * @return string|null
    */
    public function getBcsIp()
    {
        return $this->container['bcsIp'];
    }

    /**
    * Sets bcsIp
    *
    * @param string|null $bcsIp BCS浏览器ip
    *
    * @return $this
    */
    public function setBcsIp($bcsIp)
    {
        $this->container['bcsIp'] = $bcsIp;
        return $this;
    }

    /**
    * Gets bcsOrgName
    *  BCS组织名称
    *
    * @return string|null
    */
    public function getBcsOrgName()
    {
        return $this->container['bcsOrgName'];
    }

    /**
    * Sets bcsOrgName
    *
    * @param string|null $bcsOrgName BCS组织名称
    *
    * @return $this
    */
    public function setBcsOrgName($bcsOrgName)
    {
        $this->container['bcsOrgName'] = $bcsOrgName;
        return $this;
    }

    /**
    * Gets blockChainId
    *  BCS服务实例ID
    *
    * @return string|null
    */
    public function getBlockChainId()
    {
        return $this->container['blockChainId'];
    }

    /**
    * Sets blockChainId
    *
    * @param string|null $blockChainId BCS服务实例ID
    *
    * @return $this
    */
    public function setBlockChainId($blockChainId)
    {
        $this->container['blockChainId'] = $blockChainId;
        return $this;
    }

    /**
    * Gets blockChainName
    *  BCS服务实例名称
    *
    * @return string|null
    */
    public function getBlockChainName()
    {
        return $this->container['blockChainName'];
    }

    /**
    * Sets blockChainName
    *
    * @param string|null $blockChainName BCS服务实例名称
    *
    * @return $this
    */
    public function setBlockChainName($blockChainName)
    {
        $this->container['blockChainName'] = $blockChainName;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets creatorName
    *  创建人名称
    *
    * @return string
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string $creatorName 创建人名称
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets description
    *  描述信息
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets expireTime
    *  过期时间
    *
    * @return int|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param int|null $expireTime 过期时间
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets id
    *  联盟id
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 联盟id
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
    *  联盟名称
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
    * @param string $name 联盟名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets partners
    *  联盟成员数
    *
    * @return int
    */
    public function getPartners()
    {
        return $this->container['partners'];
    }

    /**
    * Sets partners
    *
    * @param int $partners 联盟成员数
    *
    * @return $this
    */
    public function setPartners($partners)
    {
        $this->container['partners'] = $partners;
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

