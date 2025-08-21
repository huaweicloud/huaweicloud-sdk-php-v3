<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ForkRepositoryDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ForkRepositoryDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 仓库ID。 **约束限制：** 不涉及。
    * name  **参数解释：** 仓库名称。 **约束限制：** 不涉及。
    * archived  **参数解释：** 是否归档。 **约束限制：** 不涉及。
    * productId  **参数解释：** 产品ID。 **约束限制：** 不涉及。
    * productName  **参数解释：** 产品名称。 **约束限制：** 不涉及。
    * pathWithNamespace  **参数解释：** 带命名空间的仓库路径。 **约束限制：** view=least时返回
    * namespace  **参数解释：** 命名空间。 **约束限制：** view=basic时返回
    * path  **参数解释：** 仓库路径。 **约束限制：** view=basic时返回
    * developMode  **参数解释：** 开发模式。 **约束限制：** view=basic时返回
    * visibility  **参数解释：** 可见性。 **约束限制：** view=basic时返回
    * security  **参数解释：** 安全级别。 **约束限制：**  view=basic时返回
    * starCount  **参数解释：** 关注数。 **约束限制：** view=basic时返回
    * forksCount  **参数解释：** Fork数。 **约束限制：** view=basic时返回
    * openMergeRequestsCount  **参数解释：** 开启的合并请求数。 **约束限制：** view=basic时返回
    * starred  **参数解释：** 是否已关注。 **约束限制：** view=basic时返回
    * nameWithNamespace  **参数解释：** 带命名空间的仓库名称。 **约束限制：** view=basic时返回
    * lastActivityAt  **参数解释：** 最后活动时间。 **约束限制：** view=basic时返回
    * createdAt  **参数解释：** 创建时间。 **约束限制：** view=basic时返回
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'name' => 'string',
            'archived' => 'bool',
            'productId' => 'string',
            'productName' => 'string',
            'pathWithNamespace' => 'string',
            'namespace' => 'string',
            'path' => 'string',
            'developMode' => 'string',
            'visibility' => 'string',
            'security' => 'string',
            'starCount' => 'int',
            'forksCount' => 'int',
            'openMergeRequestsCount' => 'int',
            'starred' => 'bool',
            'nameWithNamespace' => 'string',
            'lastActivityAt' => 'string',
            'createdAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 仓库ID。 **约束限制：** 不涉及。
    * name  **参数解释：** 仓库名称。 **约束限制：** 不涉及。
    * archived  **参数解释：** 是否归档。 **约束限制：** 不涉及。
    * productId  **参数解释：** 产品ID。 **约束限制：** 不涉及。
    * productName  **参数解释：** 产品名称。 **约束限制：** 不涉及。
    * pathWithNamespace  **参数解释：** 带命名空间的仓库路径。 **约束限制：** view=least时返回
    * namespace  **参数解释：** 命名空间。 **约束限制：** view=basic时返回
    * path  **参数解释：** 仓库路径。 **约束限制：** view=basic时返回
    * developMode  **参数解释：** 开发模式。 **约束限制：** view=basic时返回
    * visibility  **参数解释：** 可见性。 **约束限制：** view=basic时返回
    * security  **参数解释：** 安全级别。 **约束限制：**  view=basic时返回
    * starCount  **参数解释：** 关注数。 **约束限制：** view=basic时返回
    * forksCount  **参数解释：** Fork数。 **约束限制：** view=basic时返回
    * openMergeRequestsCount  **参数解释：** 开启的合并请求数。 **约束限制：** view=basic时返回
    * starred  **参数解释：** 是否已关注。 **约束限制：** view=basic时返回
    * nameWithNamespace  **参数解释：** 带命名空间的仓库名称。 **约束限制：** view=basic时返回
    * lastActivityAt  **参数解释：** 最后活动时间。 **约束限制：** view=basic时返回
    * createdAt  **参数解释：** 创建时间。 **约束限制：** view=basic时返回
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'archived' => null,
        'productId' => null,
        'productName' => null,
        'pathWithNamespace' => null,
        'namespace' => null,
        'path' => null,
        'developMode' => null,
        'visibility' => null,
        'security' => null,
        'starCount' => null,
        'forksCount' => null,
        'openMergeRequestsCount' => null,
        'starred' => null,
        'nameWithNamespace' => null,
        'lastActivityAt' => null,
        'createdAt' => null
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
    * id  **参数解释：** 仓库ID。 **约束限制：** 不涉及。
    * name  **参数解释：** 仓库名称。 **约束限制：** 不涉及。
    * archived  **参数解释：** 是否归档。 **约束限制：** 不涉及。
    * productId  **参数解释：** 产品ID。 **约束限制：** 不涉及。
    * productName  **参数解释：** 产品名称。 **约束限制：** 不涉及。
    * pathWithNamespace  **参数解释：** 带命名空间的仓库路径。 **约束限制：** view=least时返回
    * namespace  **参数解释：** 命名空间。 **约束限制：** view=basic时返回
    * path  **参数解释：** 仓库路径。 **约束限制：** view=basic时返回
    * developMode  **参数解释：** 开发模式。 **约束限制：** view=basic时返回
    * visibility  **参数解释：** 可见性。 **约束限制：** view=basic时返回
    * security  **参数解释：** 安全级别。 **约束限制：**  view=basic时返回
    * starCount  **参数解释：** 关注数。 **约束限制：** view=basic时返回
    * forksCount  **参数解释：** Fork数。 **约束限制：** view=basic时返回
    * openMergeRequestsCount  **参数解释：** 开启的合并请求数。 **约束限制：** view=basic时返回
    * starred  **参数解释：** 是否已关注。 **约束限制：** view=basic时返回
    * nameWithNamespace  **参数解释：** 带命名空间的仓库名称。 **约束限制：** view=basic时返回
    * lastActivityAt  **参数解释：** 最后活动时间。 **约束限制：** view=basic时返回
    * createdAt  **参数解释：** 创建时间。 **约束限制：** view=basic时返回
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'archived' => 'archived',
            'productId' => 'product_id',
            'productName' => 'product_name',
            'pathWithNamespace' => 'path_with_namespace',
            'namespace' => 'namespace',
            'path' => 'path',
            'developMode' => 'develop_mode',
            'visibility' => 'visibility',
            'security' => 'security',
            'starCount' => 'star_count',
            'forksCount' => 'forks_count',
            'openMergeRequestsCount' => 'open_merge_requests_count',
            'starred' => 'starred',
            'nameWithNamespace' => 'name_with_namespace',
            'lastActivityAt' => 'last_activity_at',
            'createdAt' => 'created_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 仓库ID。 **约束限制：** 不涉及。
    * name  **参数解释：** 仓库名称。 **约束限制：** 不涉及。
    * archived  **参数解释：** 是否归档。 **约束限制：** 不涉及。
    * productId  **参数解释：** 产品ID。 **约束限制：** 不涉及。
    * productName  **参数解释：** 产品名称。 **约束限制：** 不涉及。
    * pathWithNamespace  **参数解释：** 带命名空间的仓库路径。 **约束限制：** view=least时返回
    * namespace  **参数解释：** 命名空间。 **约束限制：** view=basic时返回
    * path  **参数解释：** 仓库路径。 **约束限制：** view=basic时返回
    * developMode  **参数解释：** 开发模式。 **约束限制：** view=basic时返回
    * visibility  **参数解释：** 可见性。 **约束限制：** view=basic时返回
    * security  **参数解释：** 安全级别。 **约束限制：**  view=basic时返回
    * starCount  **参数解释：** 关注数。 **约束限制：** view=basic时返回
    * forksCount  **参数解释：** Fork数。 **约束限制：** view=basic时返回
    * openMergeRequestsCount  **参数解释：** 开启的合并请求数。 **约束限制：** view=basic时返回
    * starred  **参数解释：** 是否已关注。 **约束限制：** view=basic时返回
    * nameWithNamespace  **参数解释：** 带命名空间的仓库名称。 **约束限制：** view=basic时返回
    * lastActivityAt  **参数解释：** 最后活动时间。 **约束限制：** view=basic时返回
    * createdAt  **参数解释：** 创建时间。 **约束限制：** view=basic时返回
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'archived' => 'setArchived',
            'productId' => 'setProductId',
            'productName' => 'setProductName',
            'pathWithNamespace' => 'setPathWithNamespace',
            'namespace' => 'setNamespace',
            'path' => 'setPath',
            'developMode' => 'setDevelopMode',
            'visibility' => 'setVisibility',
            'security' => 'setSecurity',
            'starCount' => 'setStarCount',
            'forksCount' => 'setForksCount',
            'openMergeRequestsCount' => 'setOpenMergeRequestsCount',
            'starred' => 'setStarred',
            'nameWithNamespace' => 'setNameWithNamespace',
            'lastActivityAt' => 'setLastActivityAt',
            'createdAt' => 'setCreatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 仓库ID。 **约束限制：** 不涉及。
    * name  **参数解释：** 仓库名称。 **约束限制：** 不涉及。
    * archived  **参数解释：** 是否归档。 **约束限制：** 不涉及。
    * productId  **参数解释：** 产品ID。 **约束限制：** 不涉及。
    * productName  **参数解释：** 产品名称。 **约束限制：** 不涉及。
    * pathWithNamespace  **参数解释：** 带命名空间的仓库路径。 **约束限制：** view=least时返回
    * namespace  **参数解释：** 命名空间。 **约束限制：** view=basic时返回
    * path  **参数解释：** 仓库路径。 **约束限制：** view=basic时返回
    * developMode  **参数解释：** 开发模式。 **约束限制：** view=basic时返回
    * visibility  **参数解释：** 可见性。 **约束限制：** view=basic时返回
    * security  **参数解释：** 安全级别。 **约束限制：**  view=basic时返回
    * starCount  **参数解释：** 关注数。 **约束限制：** view=basic时返回
    * forksCount  **参数解释：** Fork数。 **约束限制：** view=basic时返回
    * openMergeRequestsCount  **参数解释：** 开启的合并请求数。 **约束限制：** view=basic时返回
    * starred  **参数解释：** 是否已关注。 **约束限制：** view=basic时返回
    * nameWithNamespace  **参数解释：** 带命名空间的仓库名称。 **约束限制：** view=basic时返回
    * lastActivityAt  **参数解释：** 最后活动时间。 **约束限制：** view=basic时返回
    * createdAt  **参数解释：** 创建时间。 **约束限制：** view=basic时返回
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'archived' => 'getArchived',
            'productId' => 'getProductId',
            'productName' => 'getProductName',
            'pathWithNamespace' => 'getPathWithNamespace',
            'namespace' => 'getNamespace',
            'path' => 'getPath',
            'developMode' => 'getDevelopMode',
            'visibility' => 'getVisibility',
            'security' => 'getSecurity',
            'starCount' => 'getStarCount',
            'forksCount' => 'getForksCount',
            'openMergeRequestsCount' => 'getOpenMergeRequestsCount',
            'starred' => 'getStarred',
            'nameWithNamespace' => 'getNameWithNamespace',
            'lastActivityAt' => 'getLastActivityAt',
            'createdAt' => 'getCreatedAt'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['archived'] = isset($data['archived']) ? $data['archived'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['pathWithNamespace'] = isset($data['pathWithNamespace']) ? $data['pathWithNamespace'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['developMode'] = isset($data['developMode']) ? $data['developMode'] : null;
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : null;
        $this->container['security'] = isset($data['security']) ? $data['security'] : null;
        $this->container['starCount'] = isset($data['starCount']) ? $data['starCount'] : null;
        $this->container['forksCount'] = isset($data['forksCount']) ? $data['forksCount'] : null;
        $this->container['openMergeRequestsCount'] = isset($data['openMergeRequestsCount']) ? $data['openMergeRequestsCount'] : null;
        $this->container['starred'] = isset($data['starred']) ? $data['starred'] : null;
        $this->container['nameWithNamespace'] = isset($data['nameWithNamespace']) ? $data['nameWithNamespace'] : null;
        $this->container['lastActivityAt'] = isset($data['lastActivityAt']) ? $data['lastActivityAt'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['productId']) && (mb_strlen($this->container['productId']) > 255)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['productId']) && (mb_strlen($this->container['productId']) < 1)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['productName']) && (mb_strlen($this->container['productName']) > 255)) {
                $invalidProperties[] = "invalid value for 'productName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['productName']) && (mb_strlen($this->container['productName']) < 1)) {
                $invalidProperties[] = "invalid value for 'productName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pathWithNamespace']) && (mb_strlen($this->container['pathWithNamespace']) > 255)) {
                $invalidProperties[] = "invalid value for 'pathWithNamespace', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['pathWithNamespace']) && (mb_strlen($this->container['pathWithNamespace']) < 1)) {
                $invalidProperties[] = "invalid value for 'pathWithNamespace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 255)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 1)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 255)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 1)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['developMode']) && (mb_strlen($this->container['developMode']) > 255)) {
                $invalidProperties[] = "invalid value for 'developMode', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['developMode']) && (mb_strlen($this->container['developMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'developMode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['visibility']) && (mb_strlen($this->container['visibility']) > 255)) {
                $invalidProperties[] = "invalid value for 'visibility', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['visibility']) && (mb_strlen($this->container['visibility']) < 1)) {
                $invalidProperties[] = "invalid value for 'visibility', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['security']) && (mb_strlen($this->container['security']) > 255)) {
                $invalidProperties[] = "invalid value for 'security', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['security']) && (mb_strlen($this->container['security']) < 1)) {
                $invalidProperties[] = "invalid value for 'security', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['starCount']) && ($this->container['starCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'starCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['starCount']) && ($this->container['starCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'starCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['forksCount']) && ($this->container['forksCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'forksCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['forksCount']) && ($this->container['forksCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'forksCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['openMergeRequestsCount']) && ($this->container['openMergeRequestsCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'openMergeRequestsCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['openMergeRequestsCount']) && ($this->container['openMergeRequestsCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'openMergeRequestsCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nameWithNamespace']) && (mb_strlen($this->container['nameWithNamespace']) > 255)) {
                $invalidProperties[] = "invalid value for 'nameWithNamespace', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['nameWithNamespace']) && (mb_strlen($this->container['nameWithNamespace']) < 1)) {
                $invalidProperties[] = "invalid value for 'nameWithNamespace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['lastActivityAt']) && (mb_strlen($this->container['lastActivityAt']) > 255)) {
                $invalidProperties[] = "invalid value for 'lastActivityAt', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['lastActivityAt']) && (mb_strlen($this->container['lastActivityAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'lastActivityAt', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) > 255)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be bigger than or equal to 1.";
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
    *  **参数解释：** 仓库ID。 **约束限制：** 不涉及。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id **参数解释：** 仓库ID。 **约束限制：** 不涉及。
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
    *  **参数解释：** 仓库名称。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释：** 仓库名称。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets archived
    *  **参数解释：** 是否归档。 **约束限制：** 不涉及。
    *
    * @return bool|null
    */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
    * Sets archived
    *
    * @param bool|null $archived **参数解释：** 是否归档。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;
        return $this;
    }

    /**
    * Gets productId
    *  **参数解释：** 产品ID。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId **参数解释：** 产品ID。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets productName
    *  **参数解释：** 产品名称。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
    * Sets productName
    *
    * @param string|null $productName **参数解释：** 产品名称。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;
        return $this;
    }

    /**
    * Gets pathWithNamespace
    *  **参数解释：** 带命名空间的仓库路径。 **约束限制：** view=least时返回
    *
    * @return string|null
    */
    public function getPathWithNamespace()
    {
        return $this->container['pathWithNamespace'];
    }

    /**
    * Sets pathWithNamespace
    *
    * @param string|null $pathWithNamespace **参数解释：** 带命名空间的仓库路径。 **约束限制：** view=least时返回
    *
    * @return $this
    */
    public function setPathWithNamespace($pathWithNamespace)
    {
        $this->container['pathWithNamespace'] = $pathWithNamespace;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释：** 命名空间。 **约束限制：** view=basic时返回
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
    * @param string|null $namespace **参数解释：** 命名空间。 **约束限制：** view=basic时返回
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释：** 仓库路径。 **约束限制：** view=basic时返回
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path **参数解释：** 仓库路径。 **约束限制：** view=basic时返回
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets developMode
    *  **参数解释：** 开发模式。 **约束限制：** view=basic时返回
    *
    * @return string|null
    */
    public function getDevelopMode()
    {
        return $this->container['developMode'];
    }

    /**
    * Sets developMode
    *
    * @param string|null $developMode **参数解释：** 开发模式。 **约束限制：** view=basic时返回
    *
    * @return $this
    */
    public function setDevelopMode($developMode)
    {
        $this->container['developMode'] = $developMode;
        return $this;
    }

    /**
    * Gets visibility
    *  **参数解释：** 可见性。 **约束限制：** view=basic时返回
    *
    * @return string|null
    */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
    * Sets visibility
    *
    * @param string|null $visibility **参数解释：** 可见性。 **约束限制：** view=basic时返回
    *
    * @return $this
    */
    public function setVisibility($visibility)
    {
        $this->container['visibility'] = $visibility;
        return $this;
    }

    /**
    * Gets security
    *  **参数解释：** 安全级别。 **约束限制：**  view=basic时返回
    *
    * @return string|null
    */
    public function getSecurity()
    {
        return $this->container['security'];
    }

    /**
    * Sets security
    *
    * @param string|null $security **参数解释：** 安全级别。 **约束限制：**  view=basic时返回
    *
    * @return $this
    */
    public function setSecurity($security)
    {
        $this->container['security'] = $security;
        return $this;
    }

    /**
    * Gets starCount
    *  **参数解释：** 关注数。 **约束限制：** view=basic时返回
    *
    * @return int|null
    */
    public function getStarCount()
    {
        return $this->container['starCount'];
    }

    /**
    * Sets starCount
    *
    * @param int|null $starCount **参数解释：** 关注数。 **约束限制：** view=basic时返回
    *
    * @return $this
    */
    public function setStarCount($starCount)
    {
        $this->container['starCount'] = $starCount;
        return $this;
    }

    /**
    * Gets forksCount
    *  **参数解释：** Fork数。 **约束限制：** view=basic时返回
    *
    * @return int|null
    */
    public function getForksCount()
    {
        return $this->container['forksCount'];
    }

    /**
    * Sets forksCount
    *
    * @param int|null $forksCount **参数解释：** Fork数。 **约束限制：** view=basic时返回
    *
    * @return $this
    */
    public function setForksCount($forksCount)
    {
        $this->container['forksCount'] = $forksCount;
        return $this;
    }

    /**
    * Gets openMergeRequestsCount
    *  **参数解释：** 开启的合并请求数。 **约束限制：** view=basic时返回
    *
    * @return int|null
    */
    public function getOpenMergeRequestsCount()
    {
        return $this->container['openMergeRequestsCount'];
    }

    /**
    * Sets openMergeRequestsCount
    *
    * @param int|null $openMergeRequestsCount **参数解释：** 开启的合并请求数。 **约束限制：** view=basic时返回
    *
    * @return $this
    */
    public function setOpenMergeRequestsCount($openMergeRequestsCount)
    {
        $this->container['openMergeRequestsCount'] = $openMergeRequestsCount;
        return $this;
    }

    /**
    * Gets starred
    *  **参数解释：** 是否已关注。 **约束限制：** view=basic时返回
    *
    * @return bool|null
    */
    public function getStarred()
    {
        return $this->container['starred'];
    }

    /**
    * Sets starred
    *
    * @param bool|null $starred **参数解释：** 是否已关注。 **约束限制：** view=basic时返回
    *
    * @return $this
    */
    public function setStarred($starred)
    {
        $this->container['starred'] = $starred;
        return $this;
    }

    /**
    * Gets nameWithNamespace
    *  **参数解释：** 带命名空间的仓库名称。 **约束限制：** view=basic时返回
    *
    * @return string|null
    */
    public function getNameWithNamespace()
    {
        return $this->container['nameWithNamespace'];
    }

    /**
    * Sets nameWithNamespace
    *
    * @param string|null $nameWithNamespace **参数解释：** 带命名空间的仓库名称。 **约束限制：** view=basic时返回
    *
    * @return $this
    */
    public function setNameWithNamespace($nameWithNamespace)
    {
        $this->container['nameWithNamespace'] = $nameWithNamespace;
        return $this;
    }

    /**
    * Gets lastActivityAt
    *  **参数解释：** 最后活动时间。 **约束限制：** view=basic时返回
    *
    * @return string|null
    */
    public function getLastActivityAt()
    {
        return $this->container['lastActivityAt'];
    }

    /**
    * Sets lastActivityAt
    *
    * @param string|null $lastActivityAt **参数解释：** 最后活动时间。 **约束限制：** view=basic时返回
    *
    * @return $this
    */
    public function setLastActivityAt($lastActivityAt)
    {
        $this->container['lastActivityAt'] = $lastActivityAt;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释：** 创建时间。 **约束限制：** view=basic时返回
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
    * @param string|null $createdAt **参数解释：** 创建时间。 **约束限制：** view=basic时返回
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
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

