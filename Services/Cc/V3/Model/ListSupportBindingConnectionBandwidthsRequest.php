<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSupportBindingConnectionBandwidthsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSupportBindingConnectionBandwidthsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  每页返回的个数。 取值范围：1~1000。
    * marker  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向后翻页。 翻页过程中，查询条件不能修改，包括过滤条件、排序条件、limit。
    * enterpriseProjectId  根据企业项目ID过滤列表。
    * localArea  功能说明：本端接入点。   如果是region类型，则返回所有满足条件的城域带宽，不进行该字段的匹配过滤   如果是其他类型，则会用该字段跟全域互联带宽的local_area进行匹配过滤   附带过滤条件：会通过local_area和remote_area推算最佳全域互联带宽类型进行过滤查询   限制：local_area和remote_area同为空或者同不为空，且站点类型需一致
    * remoteArea  功能说明：远端接入点。   如果是region类型，则返回所有满足条件的城域带宽，不进行该字段的匹配过滤   如果是其他类型，则会用该字段跟全域互联带宽的remote_area进行匹配过滤   附带过滤条件：会通过local_area和remote_area推算最佳全域互联带宽类型进行过滤查询   限制：local_area和remote_area同为空或者同不为空，且站点类型需一致
    * bindingService  根据支持绑定实例类型过滤全域互联带宽列表。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'enterpriseProjectId' => 'string[]',
            'localArea' => 'string',
            'remoteArea' => 'string',
            'bindingService' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  每页返回的个数。 取值范围：1~1000。
    * marker  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向后翻页。 翻页过程中，查询条件不能修改，包括过滤条件、排序条件、limit。
    * enterpriseProjectId  根据企业项目ID过滤列表。
    * localArea  功能说明：本端接入点。   如果是region类型，则返回所有满足条件的城域带宽，不进行该字段的匹配过滤   如果是其他类型，则会用该字段跟全域互联带宽的local_area进行匹配过滤   附带过滤条件：会通过local_area和remote_area推算最佳全域互联带宽类型进行过滤查询   限制：local_area和remote_area同为空或者同不为空，且站点类型需一致
    * remoteArea  功能说明：远端接入点。   如果是region类型，则返回所有满足条件的城域带宽，不进行该字段的匹配过滤   如果是其他类型，则会用该字段跟全域互联带宽的remote_area进行匹配过滤   附带过滤条件：会通过local_area和remote_area推算最佳全域互联带宽类型进行过滤查询   限制：local_area和remote_area同为空或者同不为空，且站点类型需一致
    * bindingService  根据支持绑定实例类型过滤全域互联带宽列表。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => null,
        'enterpriseProjectId' => null,
        'localArea' => null,
        'remoteArea' => null,
        'bindingService' => null
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
    * limit  每页返回的个数。 取值范围：1~1000。
    * marker  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向后翻页。 翻页过程中，查询条件不能修改，包括过滤条件、排序条件、limit。
    * enterpriseProjectId  根据企业项目ID过滤列表。
    * localArea  功能说明：本端接入点。   如果是region类型，则返回所有满足条件的城域带宽，不进行该字段的匹配过滤   如果是其他类型，则会用该字段跟全域互联带宽的local_area进行匹配过滤   附带过滤条件：会通过local_area和remote_area推算最佳全域互联带宽类型进行过滤查询   限制：local_area和remote_area同为空或者同不为空，且站点类型需一致
    * remoteArea  功能说明：远端接入点。   如果是region类型，则返回所有满足条件的城域带宽，不进行该字段的匹配过滤   如果是其他类型，则会用该字段跟全域互联带宽的remote_area进行匹配过滤   附带过滤条件：会通过local_area和remote_area推算最佳全域互联带宽类型进行过滤查询   限制：local_area和remote_area同为空或者同不为空，且站点类型需一致
    * bindingService  根据支持绑定实例类型过滤全域互联带宽列表。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'enterpriseProjectId' => 'enterprise_project_id',
            'localArea' => 'local_area',
            'remoteArea' => 'remote_area',
            'bindingService' => 'binding_service'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  每页返回的个数。 取值范围：1~1000。
    * marker  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向后翻页。 翻页过程中，查询条件不能修改，包括过滤条件、排序条件、limit。
    * enterpriseProjectId  根据企业项目ID过滤列表。
    * localArea  功能说明：本端接入点。   如果是region类型，则返回所有满足条件的城域带宽，不进行该字段的匹配过滤   如果是其他类型，则会用该字段跟全域互联带宽的local_area进行匹配过滤   附带过滤条件：会通过local_area和remote_area推算最佳全域互联带宽类型进行过滤查询   限制：local_area和remote_area同为空或者同不为空，且站点类型需一致
    * remoteArea  功能说明：远端接入点。   如果是region类型，则返回所有满足条件的城域带宽，不进行该字段的匹配过滤   如果是其他类型，则会用该字段跟全域互联带宽的remote_area进行匹配过滤   附带过滤条件：会通过local_area和remote_area推算最佳全域互联带宽类型进行过滤查询   限制：local_area和remote_area同为空或者同不为空，且站点类型需一致
    * bindingService  根据支持绑定实例类型过滤全域互联带宽列表。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'localArea' => 'setLocalArea',
            'remoteArea' => 'setRemoteArea',
            'bindingService' => 'setBindingService'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  每页返回的个数。 取值范围：1~1000。
    * marker  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向后翻页。 翻页过程中，查询条件不能修改，包括过滤条件、排序条件、limit。
    * enterpriseProjectId  根据企业项目ID过滤列表。
    * localArea  功能说明：本端接入点。   如果是region类型，则返回所有满足条件的城域带宽，不进行该字段的匹配过滤   如果是其他类型，则会用该字段跟全域互联带宽的local_area进行匹配过滤   附带过滤条件：会通过local_area和remote_area推算最佳全域互联带宽类型进行过滤查询   限制：local_area和remote_area同为空或者同不为空，且站点类型需一致
    * remoteArea  功能说明：远端接入点。   如果是region类型，则返回所有满足条件的城域带宽，不进行该字段的匹配过滤   如果是其他类型，则会用该字段跟全域互联带宽的remote_area进行匹配过滤   附带过滤条件：会通过local_area和remote_area推算最佳全域互联带宽类型进行过滤查询   限制：local_area和remote_area同为空或者同不为空，且站点类型需一致
    * bindingService  根据支持绑定实例类型过滤全域互联带宽列表。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'localArea' => 'getLocalArea',
            'remoteArea' => 'getRemoteArea',
            'bindingService' => 'getBindingService'
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
    const BINDING_SERVICE_CC = 'CC';
    const BINDING_SERVICE_GEIP = 'GEIP';
    const BINDING_SERVICE_GCN = 'GCN';
    const BINDING_SERVICE_GSN = 'GSN';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBindingServiceAllowableValues()
    {
        return [
            self::BINDING_SERVICE_CC,
            self::BINDING_SERVICE_GEIP,
            self::BINDING_SERVICE_GCN,
            self::BINDING_SERVICE_GSN,
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['localArea'] = isset($data['localArea']) ? $data['localArea'] : null;
        $this->container['remoteArea'] = isset($data['remoteArea']) ? $data['remoteArea'] : null;
        $this->container['bindingService'] = isset($data['bindingService']) ? $data['bindingService'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 4096)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 1)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['localArea']) && (mb_strlen($this->container['localArea']) > 64)) {
                $invalidProperties[] = "invalid value for 'localArea', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['localArea']) && (mb_strlen($this->container['localArea']) < 1)) {
                $invalidProperties[] = "invalid value for 'localArea', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['remoteArea']) && (mb_strlen($this->container['remoteArea']) > 64)) {
                $invalidProperties[] = "invalid value for 'remoteArea', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['remoteArea']) && (mb_strlen($this->container['remoteArea']) < 1)) {
                $invalidProperties[] = "invalid value for 'remoteArea', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['bindingService'] === null) {
            $invalidProperties[] = "'bindingService' can't be null";
        }
            $allowedValues = $this->getBindingServiceAllowableValues();
                if (!is_null($this->container['bindingService']) && !in_array($this->container['bindingService'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'bindingService', must be one of '%s'",
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
    * Gets limit
    *  每页返回的个数。 取值范围：1~1000。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页返回的个数。 取值范围：1~1000。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向后翻页。 翻页过程中，查询条件不能修改，包括过滤条件、排序条件、limit。
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向后翻页。 翻页过程中，查询条件不能修改，包括过滤条件、排序条件、limit。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  根据企业项目ID过滤列表。
    *
    * @return string[]|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string[]|null $enterpriseProjectId 根据企业项目ID过滤列表。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets localArea
    *  功能说明：本端接入点。   如果是region类型，则返回所有满足条件的城域带宽，不进行该字段的匹配过滤   如果是其他类型，则会用该字段跟全域互联带宽的local_area进行匹配过滤   附带过滤条件：会通过local_area和remote_area推算最佳全域互联带宽类型进行过滤查询   限制：local_area和remote_area同为空或者同不为空，且站点类型需一致
    *
    * @return string|null
    */
    public function getLocalArea()
    {
        return $this->container['localArea'];
    }

    /**
    * Sets localArea
    *
    * @param string|null $localArea 功能说明：本端接入点。   如果是region类型，则返回所有满足条件的城域带宽，不进行该字段的匹配过滤   如果是其他类型，则会用该字段跟全域互联带宽的local_area进行匹配过滤   附带过滤条件：会通过local_area和remote_area推算最佳全域互联带宽类型进行过滤查询   限制：local_area和remote_area同为空或者同不为空，且站点类型需一致
    *
    * @return $this
    */
    public function setLocalArea($localArea)
    {
        $this->container['localArea'] = $localArea;
        return $this;
    }

    /**
    * Gets remoteArea
    *  功能说明：远端接入点。   如果是region类型，则返回所有满足条件的城域带宽，不进行该字段的匹配过滤   如果是其他类型，则会用该字段跟全域互联带宽的remote_area进行匹配过滤   附带过滤条件：会通过local_area和remote_area推算最佳全域互联带宽类型进行过滤查询   限制：local_area和remote_area同为空或者同不为空，且站点类型需一致
    *
    * @return string|null
    */
    public function getRemoteArea()
    {
        return $this->container['remoteArea'];
    }

    /**
    * Sets remoteArea
    *
    * @param string|null $remoteArea 功能说明：远端接入点。   如果是region类型，则返回所有满足条件的城域带宽，不进行该字段的匹配过滤   如果是其他类型，则会用该字段跟全域互联带宽的remote_area进行匹配过滤   附带过滤条件：会通过local_area和remote_area推算最佳全域互联带宽类型进行过滤查询   限制：local_area和remote_area同为空或者同不为空，且站点类型需一致
    *
    * @return $this
    */
    public function setRemoteArea($remoteArea)
    {
        $this->container['remoteArea'] = $remoteArea;
        return $this;
    }

    /**
    * Gets bindingService
    *  根据支持绑定实例类型过滤全域互联带宽列表。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络
    *
    * @return string
    */
    public function getBindingService()
    {
        return $this->container['bindingService'];
    }

    /**
    * Sets bindingService
    *
    * @param string $bindingService 根据支持绑定实例类型过滤全域互联带宽列表。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络
    *
    * @return $this
    */
    public function setBindingService($bindingService)
    {
        $this->container['bindingService'] = $bindingService;
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

