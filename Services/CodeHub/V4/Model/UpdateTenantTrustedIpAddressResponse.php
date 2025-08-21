<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateTenantTrustedIpAddressResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateTenantTrustedIpAddressResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** ip白名单id。
    * userId  **参数解释：** 用户id。
    * domainId  **参数解释：** 租户id。
    * ipRange  **参数解释：** ip范围。
    * ipType  **参数解释：** 格式类型。 - 0，表示指定IP。 - 1，表示ip范围。 - 2，表示CIDR。
    * ipStart  **参数解释：** 起始ip。
    * ipEnd  **参数解释：** 结束ip。
    * viewFlag  **参数解释：** 是否允许访问代码仓库。 - 0，表示禁止访问。 - 1，表示允许访问。
    * downloadFlag  **参数解释：** 是否允许下载代码。 - 0，表示禁止下载。 - 1，表示允许下载。
    * uploadFlag  **参数解释：** 是否允许提交代码。 - 0，表示禁止提交。 - 1，表示允许提交。
    * remark  **参数解释：** 备注。 **取值范围：** 字符串长度不少于0，不超过200。
    * createdAt  **参数解释：** 创建时间。 **参数解释：** MMM dd, yyyy hh:mm:ss a
    * updatedAt  **参数解释：** 更新时间。 **参数解释：** MMM dd, yyyy hh:mm:ss a
    * orderFlag  **参数解释：** 排序。 - 0，表示默认规则。 - 1，表示自定义规则。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'userId' => 'int',
            'domainId' => 'string',
            'ipRange' => 'string',
            'ipType' => 'int',
            'ipStart' => 'string',
            'ipEnd' => 'string',
            'viewFlag' => 'int',
            'downloadFlag' => 'int',
            'uploadFlag' => 'int',
            'remark' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'orderFlag' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** ip白名单id。
    * userId  **参数解释：** 用户id。
    * domainId  **参数解释：** 租户id。
    * ipRange  **参数解释：** ip范围。
    * ipType  **参数解释：** 格式类型。 - 0，表示指定IP。 - 1，表示ip范围。 - 2，表示CIDR。
    * ipStart  **参数解释：** 起始ip。
    * ipEnd  **参数解释：** 结束ip。
    * viewFlag  **参数解释：** 是否允许访问代码仓库。 - 0，表示禁止访问。 - 1，表示允许访问。
    * downloadFlag  **参数解释：** 是否允许下载代码。 - 0，表示禁止下载。 - 1，表示允许下载。
    * uploadFlag  **参数解释：** 是否允许提交代码。 - 0，表示禁止提交。 - 1，表示允许提交。
    * remark  **参数解释：** 备注。 **取值范围：** 字符串长度不少于0，不超过200。
    * createdAt  **参数解释：** 创建时间。 **参数解释：** MMM dd, yyyy hh:mm:ss a
    * updatedAt  **参数解释：** 更新时间。 **参数解释：** MMM dd, yyyy hh:mm:ss a
    * orderFlag  **参数解释：** 排序。 - 0，表示默认规则。 - 1，表示自定义规则。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'userId' => null,
        'domainId' => null,
        'ipRange' => null,
        'ipType' => null,
        'ipStart' => null,
        'ipEnd' => null,
        'viewFlag' => null,
        'downloadFlag' => null,
        'uploadFlag' => null,
        'remark' => null,
        'createdAt' => 'MMM dd, yyyy hh:mm:ss a',
        'updatedAt' => 'MMM dd, yyyy hh:mm:ss a',
        'orderFlag' => null
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
    * id  **参数解释：** ip白名单id。
    * userId  **参数解释：** 用户id。
    * domainId  **参数解释：** 租户id。
    * ipRange  **参数解释：** ip范围。
    * ipType  **参数解释：** 格式类型。 - 0，表示指定IP。 - 1，表示ip范围。 - 2，表示CIDR。
    * ipStart  **参数解释：** 起始ip。
    * ipEnd  **参数解释：** 结束ip。
    * viewFlag  **参数解释：** 是否允许访问代码仓库。 - 0，表示禁止访问。 - 1，表示允许访问。
    * downloadFlag  **参数解释：** 是否允许下载代码。 - 0，表示禁止下载。 - 1，表示允许下载。
    * uploadFlag  **参数解释：** 是否允许提交代码。 - 0，表示禁止提交。 - 1，表示允许提交。
    * remark  **参数解释：** 备注。 **取值范围：** 字符串长度不少于0，不超过200。
    * createdAt  **参数解释：** 创建时间。 **参数解释：** MMM dd, yyyy hh:mm:ss a
    * updatedAt  **参数解释：** 更新时间。 **参数解释：** MMM dd, yyyy hh:mm:ss a
    * orderFlag  **参数解释：** 排序。 - 0，表示默认规则。 - 1，表示自定义规则。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'userId' => 'user_id',
            'domainId' => 'domain_id',
            'ipRange' => 'ip_range',
            'ipType' => 'ip_type',
            'ipStart' => 'ip_start',
            'ipEnd' => 'ip_end',
            'viewFlag' => 'view_flag',
            'downloadFlag' => 'download_flag',
            'uploadFlag' => 'upload_flag',
            'remark' => 'remark',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'orderFlag' => 'order_flag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** ip白名单id。
    * userId  **参数解释：** 用户id。
    * domainId  **参数解释：** 租户id。
    * ipRange  **参数解释：** ip范围。
    * ipType  **参数解释：** 格式类型。 - 0，表示指定IP。 - 1，表示ip范围。 - 2，表示CIDR。
    * ipStart  **参数解释：** 起始ip。
    * ipEnd  **参数解释：** 结束ip。
    * viewFlag  **参数解释：** 是否允许访问代码仓库。 - 0，表示禁止访问。 - 1，表示允许访问。
    * downloadFlag  **参数解释：** 是否允许下载代码。 - 0，表示禁止下载。 - 1，表示允许下载。
    * uploadFlag  **参数解释：** 是否允许提交代码。 - 0，表示禁止提交。 - 1，表示允许提交。
    * remark  **参数解释：** 备注。 **取值范围：** 字符串长度不少于0，不超过200。
    * createdAt  **参数解释：** 创建时间。 **参数解释：** MMM dd, yyyy hh:mm:ss a
    * updatedAt  **参数解释：** 更新时间。 **参数解释：** MMM dd, yyyy hh:mm:ss a
    * orderFlag  **参数解释：** 排序。 - 0，表示默认规则。 - 1，表示自定义规则。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'userId' => 'setUserId',
            'domainId' => 'setDomainId',
            'ipRange' => 'setIpRange',
            'ipType' => 'setIpType',
            'ipStart' => 'setIpStart',
            'ipEnd' => 'setIpEnd',
            'viewFlag' => 'setViewFlag',
            'downloadFlag' => 'setDownloadFlag',
            'uploadFlag' => 'setUploadFlag',
            'remark' => 'setRemark',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'orderFlag' => 'setOrderFlag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** ip白名单id。
    * userId  **参数解释：** 用户id。
    * domainId  **参数解释：** 租户id。
    * ipRange  **参数解释：** ip范围。
    * ipType  **参数解释：** 格式类型。 - 0，表示指定IP。 - 1，表示ip范围。 - 2，表示CIDR。
    * ipStart  **参数解释：** 起始ip。
    * ipEnd  **参数解释：** 结束ip。
    * viewFlag  **参数解释：** 是否允许访问代码仓库。 - 0，表示禁止访问。 - 1，表示允许访问。
    * downloadFlag  **参数解释：** 是否允许下载代码。 - 0，表示禁止下载。 - 1，表示允许下载。
    * uploadFlag  **参数解释：** 是否允许提交代码。 - 0，表示禁止提交。 - 1，表示允许提交。
    * remark  **参数解释：** 备注。 **取值范围：** 字符串长度不少于0，不超过200。
    * createdAt  **参数解释：** 创建时间。 **参数解释：** MMM dd, yyyy hh:mm:ss a
    * updatedAt  **参数解释：** 更新时间。 **参数解释：** MMM dd, yyyy hh:mm:ss a
    * orderFlag  **参数解释：** 排序。 - 0，表示默认规则。 - 1，表示自定义规则。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'userId' => 'getUserId',
            'domainId' => 'getDomainId',
            'ipRange' => 'getIpRange',
            'ipType' => 'getIpType',
            'ipStart' => 'getIpStart',
            'ipEnd' => 'getIpEnd',
            'viewFlag' => 'getViewFlag',
            'downloadFlag' => 'getDownloadFlag',
            'uploadFlag' => 'getUploadFlag',
            'remark' => 'getRemark',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'orderFlag' => 'getOrderFlag'
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
    const IP_TYPE_0 = 0;
    const IP_TYPE_1 = 1;
    const IP_TYPE_2 = 2;
    const VIEW_FLAG_0 = 0;
    const VIEW_FLAG_1 = 1;
    const DOWNLOAD_FLAG_0 = 0;
    const DOWNLOAD_FLAG_1 = 1;
    const UPLOAD_FLAG_0 = 0;
    const UPLOAD_FLAG_1 = 1;
    const ORDER_FLAG_0 = 0;
    const ORDER_FLAG_1 = 1;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIpTypeAllowableValues()
    {
        return [
            self::IP_TYPE_0,
            self::IP_TYPE_1,
            self::IP_TYPE_2,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getViewFlagAllowableValues()
    {
        return [
            self::VIEW_FLAG_0,
            self::VIEW_FLAG_1,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDownloadFlagAllowableValues()
    {
        return [
            self::DOWNLOAD_FLAG_0,
            self::DOWNLOAD_FLAG_1,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getUploadFlagAllowableValues()
    {
        return [
            self::UPLOAD_FLAG_0,
            self::UPLOAD_FLAG_1,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderFlagAllowableValues()
    {
        return [
            self::ORDER_FLAG_0,
            self::ORDER_FLAG_1,
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
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['ipRange'] = isset($data['ipRange']) ? $data['ipRange'] : null;
        $this->container['ipType'] = isset($data['ipType']) ? $data['ipType'] : null;
        $this->container['ipStart'] = isset($data['ipStart']) ? $data['ipStart'] : null;
        $this->container['ipEnd'] = isset($data['ipEnd']) ? $data['ipEnd'] : null;
        $this->container['viewFlag'] = isset($data['viewFlag']) ? $data['viewFlag'] : null;
        $this->container['downloadFlag'] = isset($data['downloadFlag']) ? $data['downloadFlag'] : null;
        $this->container['uploadFlag'] = isset($data['uploadFlag']) ? $data['uploadFlag'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['orderFlag'] = isset($data['orderFlag']) ? $data['orderFlag'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 100)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userId']) && ($this->container['userId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'userId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['userId']) && ($this->container['userId'] < 0)) {
                $invalidProperties[] = "invalid value for 'userId', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 1)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ipRange']) && (mb_strlen($this->container['ipRange']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'ipRange', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['ipRange']) && (mb_strlen($this->container['ipRange']) < 1)) {
                $invalidProperties[] = "invalid value for 'ipRange', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getIpTypeAllowableValues();
                if (!is_null($this->container['ipType']) && !in_array($this->container['ipType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ipType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['ipStart']) && (mb_strlen($this->container['ipStart']) > 1000)) {
                $invalidProperties[] = "invalid value for 'ipStart', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['ipStart']) && (mb_strlen($this->container['ipStart']) < 0)) {
                $invalidProperties[] = "invalid value for 'ipStart', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ipEnd']) && (mb_strlen($this->container['ipEnd']) > 1000)) {
                $invalidProperties[] = "invalid value for 'ipEnd', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['ipEnd']) && (mb_strlen($this->container['ipEnd']) < 0)) {
                $invalidProperties[] = "invalid value for 'ipEnd', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getViewFlagAllowableValues();
                if (!is_null($this->container['viewFlag']) && !in_array($this->container['viewFlag'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'viewFlag', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDownloadFlagAllowableValues();
                if (!is_null($this->container['downloadFlag']) && !in_array($this->container['downloadFlag'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'downloadFlag', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getUploadFlagAllowableValues();
                if (!is_null($this->container['uploadFlag']) && !in_array($this->container['uploadFlag'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'uploadFlag', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['remark']) && (mb_strlen($this->container['remark']) > 200)) {
                $invalidProperties[] = "invalid value for 'remark', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['remark']) && (mb_strlen($this->container['remark']) < 0)) {
                $invalidProperties[] = "invalid value for 'remark', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) > 200)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) < 0)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updatedAt']) && (mb_strlen($this->container['updatedAt']) > 200)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['updatedAt']) && (mb_strlen($this->container['updatedAt']) < 0)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getOrderFlagAllowableValues();
                if (!is_null($this->container['orderFlag']) && !in_array($this->container['orderFlag'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'orderFlag', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  **参数解释：** ip白名单id。
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
    * @param string|null $id **参数解释：** ip白名单id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets userId
    *  **参数解释：** 用户id。
    *
    * @return int|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param int|null $userId **参数解释：** 用户id。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets domainId
    *  **参数解释：** 租户id。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId **参数解释：** 租户id。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets ipRange
    *  **参数解释：** ip范围。
    *
    * @return string|null
    */
    public function getIpRange()
    {
        return $this->container['ipRange'];
    }

    /**
    * Sets ipRange
    *
    * @param string|null $ipRange **参数解释：** ip范围。
    *
    * @return $this
    */
    public function setIpRange($ipRange)
    {
        $this->container['ipRange'] = $ipRange;
        return $this;
    }

    /**
    * Gets ipType
    *  **参数解释：** 格式类型。 - 0，表示指定IP。 - 1，表示ip范围。 - 2，表示CIDR。
    *
    * @return int|null
    */
    public function getIpType()
    {
        return $this->container['ipType'];
    }

    /**
    * Sets ipType
    *
    * @param int|null $ipType **参数解释：** 格式类型。 - 0，表示指定IP。 - 1，表示ip范围。 - 2，表示CIDR。
    *
    * @return $this
    */
    public function setIpType($ipType)
    {
        $this->container['ipType'] = $ipType;
        return $this;
    }

    /**
    * Gets ipStart
    *  **参数解释：** 起始ip。
    *
    * @return string|null
    */
    public function getIpStart()
    {
        return $this->container['ipStart'];
    }

    /**
    * Sets ipStart
    *
    * @param string|null $ipStart **参数解释：** 起始ip。
    *
    * @return $this
    */
    public function setIpStart($ipStart)
    {
        $this->container['ipStart'] = $ipStart;
        return $this;
    }

    /**
    * Gets ipEnd
    *  **参数解释：** 结束ip。
    *
    * @return string|null
    */
    public function getIpEnd()
    {
        return $this->container['ipEnd'];
    }

    /**
    * Sets ipEnd
    *
    * @param string|null $ipEnd **参数解释：** 结束ip。
    *
    * @return $this
    */
    public function setIpEnd($ipEnd)
    {
        $this->container['ipEnd'] = $ipEnd;
        return $this;
    }

    /**
    * Gets viewFlag
    *  **参数解释：** 是否允许访问代码仓库。 - 0，表示禁止访问。 - 1，表示允许访问。
    *
    * @return int|null
    */
    public function getViewFlag()
    {
        return $this->container['viewFlag'];
    }

    /**
    * Sets viewFlag
    *
    * @param int|null $viewFlag **参数解释：** 是否允许访问代码仓库。 - 0，表示禁止访问。 - 1，表示允许访问。
    *
    * @return $this
    */
    public function setViewFlag($viewFlag)
    {
        $this->container['viewFlag'] = $viewFlag;
        return $this;
    }

    /**
    * Gets downloadFlag
    *  **参数解释：** 是否允许下载代码。 - 0，表示禁止下载。 - 1，表示允许下载。
    *
    * @return int|null
    */
    public function getDownloadFlag()
    {
        return $this->container['downloadFlag'];
    }

    /**
    * Sets downloadFlag
    *
    * @param int|null $downloadFlag **参数解释：** 是否允许下载代码。 - 0，表示禁止下载。 - 1，表示允许下载。
    *
    * @return $this
    */
    public function setDownloadFlag($downloadFlag)
    {
        $this->container['downloadFlag'] = $downloadFlag;
        return $this;
    }

    /**
    * Gets uploadFlag
    *  **参数解释：** 是否允许提交代码。 - 0，表示禁止提交。 - 1，表示允许提交。
    *
    * @return int|null
    */
    public function getUploadFlag()
    {
        return $this->container['uploadFlag'];
    }

    /**
    * Sets uploadFlag
    *
    * @param int|null $uploadFlag **参数解释：** 是否允许提交代码。 - 0，表示禁止提交。 - 1，表示允许提交。
    *
    * @return $this
    */
    public function setUploadFlag($uploadFlag)
    {
        $this->container['uploadFlag'] = $uploadFlag;
        return $this;
    }

    /**
    * Gets remark
    *  **参数解释：** 备注。 **取值范围：** 字符串长度不少于0，不超过200。
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark **参数解释：** 备注。 **取值范围：** 字符串长度不少于0，不超过200。
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释：** 创建时间。 **参数解释：** MMM dd, yyyy hh:mm:ss a
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt **参数解释：** 创建时间。 **参数解释：** MMM dd, yyyy hh:mm:ss a
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
    *  **参数解释：** 更新时间。 **参数解释：** MMM dd, yyyy hh:mm:ss a
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt **参数解释：** 更新时间。 **参数解释：** MMM dd, yyyy hh:mm:ss a
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets orderFlag
    *  **参数解释：** 排序。 - 0，表示默认规则。 - 1，表示自定义规则。
    *
    * @return int|null
    */
    public function getOrderFlag()
    {
        return $this->container['orderFlag'];
    }

    /**
    * Sets orderFlag
    *
    * @param int|null $orderFlag **参数解释：** 排序。 - 0，表示默认规则。 - 1，表示自定义规则。
    *
    * @return $this
    */
    public function setOrderFlag($orderFlag)
    {
        $this->container['orderFlag'] = $orderFlag;
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

